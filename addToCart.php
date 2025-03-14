<?php

require_once('Files/functions.php');

$id = $_POST['id'];

$pro = getProduct($id);

if($pro == null)
{
    die('Product Not Found');
}

$pro['quantity'] = ((int)($_POST['quantity']));
$_SESSION['cart'][$id] = $pro;

alert('success', 'Product added to cart successfully');
header('Location:shop.php');
