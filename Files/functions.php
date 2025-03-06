<?php

require_once 'Zebra_Image.php';

define('BASEPATH', 'localhost:8080');

$conn = new mysqli('localhost', 'root', '', 'e-shop');



if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function dbInsert($table, $data)
{
    $sql = "INSERT INTO $table ";

    $columnNames = "(";
    $columnValues = "(";

    echo "<pre>";

    $is_first = true;
    foreach ($data as $key => $value) {
        if ($is_first) {
            $is_first = false;
        } else {
            $columnNames .= ",";
            $columnValues .= ",";
        }
        $columnNames .= $key;
        // $columnValues .= "'$value'";

        $columnValues .= (gettype($value) == 'string') ? "'$value'" : $value;
    }

    $columnNames .= ")";
    $columnValues .= ")";

    $sql .= $columnNames . "VALUES" . $columnValues;

    global $conn;

    if ($conn->query($sql)) {
        return true;
    } else {
        return false;
    }
}

function dbSelect($table, $condition = null)
{
    $sql = "SELECT * FROM $table ";

    if ($condition !== null) {
        $sql .= " WHERE $condition ";
    }

    global $conn;

    $res = $conn->query($sql);

    $rows = [];

    while($row = $res->fetch_assoc()) {
        $rows[] = $row;
    }

    return $rows;


    // if ($conn->query($sql)->fetch_assoc()) {
    //     return true;
    // } else {
    //     return false;
    // }
}

function url($path = '/')
{
    return BASEPATH . $path;
}

function authorized_user()
{
    if (!isset($_SESSION['user'])) {
        alert("warning", "Please login");
        header('Location: login.php');

        die();
    }
}

function logout()
{
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }

    header("Location:login.php");
}

function loggedIn()
{
    if (isset($_SESSION['user'])) {
        return true;
    } else {
        return false;
    }
}

function alert($type, $message)
{
    $_SESSION['alert']['type'] = $type;
    $_SESSION['alert']['message'] = $message;
}

function login($email, $password)
{
    global $conn;
    $sql = "SELECT * FROM users WHERE email = '{$email}'";

    $res = $conn->query($sql);

    if ($res->num_rows < 1) {
        return false;
    }

    $row = $res->fetch_assoc();

    if (!password_verify($password, $row['password'])) {
        return false;
    }

    $_SESSION['user'] = $row;

    return true;
}

function textInput($data)
{
    $value = '';
    $error = '';
    $errorMessage = '';
    $name = isset($data['name']) ? $data['name'] : '';
    $attribute = isset($data['attribute']) ? $data['attribute'] : '';


    if (isset($_SESSION['form'])) {
        if (isset($_SESSION['form']['value'])) {
            if (isset($_SESSION['form']['value'][$name])) {
                $value = $_SESSION['form']['value'][$name];
            }
        }
    }

    if (isset($_SESSION['form'])) {
        if (isset($_SESSION['form']['error'])) {
            if (isset($_SESSION['form']['error'][$name])) {
                $value = $_SESSION['form']['error'][$name];
                $errorMessage = '
                    <div class="form-text text-danger">' . $error . '</div>
            ';
            }
        }
    }

    $label = isset($data['label']) ? $data['label'] : $name;
    $value = isset($data['value']) ? $data['value'] : $value;

    return '
    <label class="form-label text-capitalize" for="unp-product-name">' . $label . '</label>
    <input name="' . $name . '" value="' . $value . '" class="form-control" type="text" id="' . $name . '" placeholder="' . $name . '" ' . $attribute . '>
    ' . $errorMessage;
}

function selectInput($data, $options)
{
    $value = '';
    $error = '';
    $errorMessage = '';
    $name = isset($data['name']) ? $data['name'] : '';
    $attribute = isset($data['attribute']) ? $data['attribute'] : '';


    if (isset($_SESSION['form'])) {
        if (isset($_SESSION['form']['value'])) {
            if (isset($_SESSION['form']['value'][$name])) {
                $value = $_SESSION['form']['value'][$name];
            }
        }
    }

    if (isset($_SESSION['form'])) {
        if (isset($_SESSION['form']['error'])) {
            if (isset($_SESSION['form']['error'][$name])) {
                $value = $_SESSION['form']['error'][$name];
                $errorMessage = '
                    <div class="form-text text-danger">' . $error . '</div>
            ';
            }
        }
    }

    $label = isset($data['label']) ? $data['label'] : $name;
    $value = isset($data['value']) ? $data['value'] : $value;

    $selectOptions = "";

    foreach ($options as $key => $value) {
        $selected = "";
        if ($key == $value) {
            $selected = 'selected';
        }

        $selectOptions .= '<option value="' . $key . '">' . $value . '</option>';
    }

    $selectTag = ' <select name="' . $name . '" class="form-control">' . $selectOptions . '</select>';

    return '
    <label class="form-label text-capitalize" for="unp-product-name">' . $label . '</label>' . $selectTag . $errorMessage;
}

function upload_images($files)
{

    ini_set('memory_limit', '512M');
    if ($files == null || empty($files)) {
        return [];
    }

    $uploaded_images = [];

    foreach ($files as $file) {
        // echo "<pre>";
        // print_r($file);
        // die();
        if (
            isset($file['name']) &&
            isset($file['type']) &&
            isset($file['tmp_name']) &&
            isset($file['error']) &&
            isset($file['size'])
        ) {
            // echo "<pre>";
            // print_r($file['error']);
            // die();
            $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
            $fileName = time() . "-" . rand(1000, 10000) . "." . $ext;

            $destination = "Uploads/" . $fileName;
            $thumbnail_destination = "Uploads/thumb_" . $fileName;

            $res = move_uploaded_file($file['tmp_name'], $destination);

            // move_uploaded_file($file['tmp_name'], $destination);

            // die($res);
            if (!$res) {
                // die("Could not move uploaded file");
                continue;
            }

            create_thumbnail($destination, $thumbnail_destination);
            $img['src'] = $destination;
            $img['thumbnail'] = $thumbnail_destination;

            $uploaded_images[] = $img;

            // print_r($uploaded_images);


        }
    }

    return $uploaded_images;
}

function create_thumbnail($source, $target)
{
    $image = new stefangabos\Zebra_Image\Zebra_Image();

    $image->auto_handle_exif_orientation = true;
    $image->source_path = $source;
    $image->target_path = $target;
    $image->preserve_aspect_ratio = true;
    $image->enlarge_smaller_images = true;
    $image->preserve_time = true;
    // $image->handle_exif_orientation_tag = true;
    // $image->handle_exif_orientation_tag = true;


    $image->jpeg_quality = get_jpeg_quality(filesize($image->source_path));
    $width = 200;
    $height = 200;

    if (!$image->resize($width, $height, ZEBRA_IMAGE_CROP_CENTER)) {
        return $image->source_path;
    } else {
        return $image->target_path;
    }
    // ini_set('memory_limit', '-1');
}

function get_jpeg_quality($_size)
{
    $size = ($_size) / 1000000;
    $qt = 50;

    if ($size > 5) {
        $qt = 10;
    } else if ($size > 4) {
        $qt = 13;
    } else if ($size > 2) {
        $qt = 15;
    } else if ($size > 1) {
        $qt = 17;
    } else if ($size > 0.8) {
        $qt = 50;
    } else if ($size > 0.5) {
        $qt = 80;
    } else {
        $qt = 90;
    }

    return $qt;
}
