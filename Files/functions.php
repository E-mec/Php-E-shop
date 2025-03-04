<?php

define('BASEPATH', 'localhost:8080');

$conn = new mysqli('localhost', 'root', '', 'e-shop');



if (session_status() == PHP_SESSION_NONE) {
    session_start();
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

            $res = move_uploaded_file($file['tmp_name'], $destination);

            // move_uploaded_file($file['tmp_name'], $destination);

            // die($res);
            if (!$res) {
                // die("Could not move uploaded file");
                continue;
            }

            $img['src'] = $destination;

            $uploaded_images[] = $img;

            // print_r($uploaded_images);


        }
    }

    return $uploaded_images;
}
