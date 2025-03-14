<?php

require_once 'Zebra_Image.php';

define('BASEPATH', 'localhost:8080');

$conn = new mysqli('localhost', 'root', '', 'e-shop');



if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function getProduct($id)
{
    $sql = "SELECT * FROM products WHERE id={$id}";
    global $conn;
    $data['pro'] = $conn->query($sql)->fetch_assoc();
    $data['cat'] = null;

    if ($data['pro'] != null) {
        $cat_id = $data['pro']['category_id'];
        $sql = "SELECT * FROM categories WHERE id={$cat_id}";
        $data['cat'] = $conn->query($sql)->fetch_assoc();
    }


    return $data;
}

function dbInsert($table, $data)
{
    $sql = "INSERT INTO $table ";

    $columnNames = "(";
    $columnValues = "(";

    global $conn;

    $is_first = true;
    foreach ($data as $key => $value) {
        if ($is_first) {
            $is_first = false;
        } else {
            $columnNames .= ",";
            $columnValues .= ",";
        }
        $columnNames .= $key;
        $gettype = gettype($value);

        if($gettype == 'string'){
            $value = $conn->real_escape_string($value);
            $columnValues .= "'$value'";
        }else{
            $value = $conn->real_escape_string($value);
            $columnValues .=  $value;
        }
        // $columnValues .= "'$value'";

        // $columnValues .= (gettype($value) == 'string') ? "'$value'" : $value;
    }

    $columnNames .= ")";
    $columnValues .= ")";

    $sql .= $columnNames . "VALUES" . $columnValues;
    

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

    while ($row = $res->fetch_assoc()) {
        $rows[] = $row;
    }

    return $rows;


    // if ($conn->query($sql)->fetch_assoc()) {
    //     return true;
    // } else {
    //     return false;
    // }
}

function productFaker()
{

    $names = [
        'Lee Women\'s Ultra Lux Comfort with Flex Motion Straight Leg Jean',
        'Nine West Women\'s High Rise Perfect Skinny Jean',
        'Wrangler Women\'s Willow Mid Rise Boot Cut Ultimate Riding Jeans',
        'adidas Men\'s Daily 3.0 Sneaker',
        'PUMA Mens Tazon 6 Cross Trainer',
        'Nike Men\'s Air Zoom Pegasus 38 Running Shoe'
    ];

    $description = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, consequatur molestiae praesentium numquam cumque, beatae adipisci cum, eum doloremque iure velit earum. Eligendi adipisci mollitia corporis commodi sit iste sunt.';

    $photos = [];

    for ($i=1; $i < 20 ; $i++) { 
        $pic['thumbnail'] = 'uploads/'.$i.'.jpg'; 
        $pic['src'] = 'uploads/'.$i.'.jpg'; 
        $photos[] = $pic;
    }

    $category = [8,9,11];

    for ($i=0; $i < 20; $i++) { 
        shuffle($names);
        shuffle($photos);
        shuffle($category);

        $pro['name'] = $names[1];
        $pro['buying_price'] = rand(1000, 5000);
        $pro['selling_price'] = rand(1000, 5000);
        $pro['description'] = $description;
        $pro['photos'] = json_encode($photos);
        $pro['category_id'] = $category[0];
        $pro['user_id'] = 2;
        dbInsert('products', $pro);
    }
}

function getProductImages($json)
{

    $img['src'] = "assets/no_image.jpg";
    $img['thumbnail'] = "assets/no_image.jpg";

    $photos[] = $img;

    if ($json == null) {
        return $photos;
    }

    if (strlen($json) < 4) {
        return $photos;
    }

    $_objects = json_decode($json);
    $object = [];
    $i = 0;

    foreach($_objects as $key => $value){
        if($i > 4)
        {
            break;
        }
        $i++;
        $object[] = $value;
    }

    if (empty($object)) {
        return $photos;
    }

    return $object;
}

function get_thumbnail($json)
{

    $img = "assets/no_image.jpg";

    if ($json == null) {
        return $img;
    }

    if (strlen($json) < 4) {
        return $img;
    }

    $object = json_decode($json);

    if (empty($object)) {
        return $img;
    }

    if (!isset($object[0]->thumbnail)) {

        return $img;
    }

    return $object[0]->thumbnail;
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
    <input name="' . $name . '" value="' . $value . '" class="form-control" type="text" id="' . $name . '" placeholder="' . $label . '" ' . $attribute . '>
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
    $selected = "";

    foreach ($options as $key => $value) {
        $selected = "";
        if ($key == $value) {
            $selected = 'selected';
        }

        $selectOptions .= '<option value="' . $key . '">' . $value . '</option>';
    }

    $selectTag = ' <select name="' . $name . '"' . $selected . ' class="form-control">' . $selectOptions . '</select>';

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

function product_ui_1($pro)
{
    $img = get_thumbnail($pro['photos']);

    $str = <<<EOF

    <div class="col-md-4 col-sm-6 px-2 mb-4">
                    <div class="card product-card">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
                        <a class="card-img-top d-block overflow-hidden" href="product.php?id={$pro['id']} ?>">
                            <img src="{$img}" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sneakers &amp; Keds</a>
                            <h3 class="product-title fs-sm"><a href="product.php?id={$pro['id']}"> {$pro['name']}</a></h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price"><span class="text-accent"> {$pro['selling_price']}.<small>00</small></span></div>
                                <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body card-body-hidden">
                            <div class="text-center pb-2">
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size1" id="s-75">
                                    <label class="form-option-label" for="s-75">7.5</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size1" id="s-80" checked>
                                    <label class="form-option-label" for="s-80">8</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size1" id="s-85">
                                    <label class="form-option-label" for="s-85">8.5</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size1" id="s-90">
                                    <label class="form-option-label" for="s-90">9</label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                            <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                        </div>
                    </div>
                    <hr class="d-sm-none">
                </div>

    EOF;

    return $str;
}
