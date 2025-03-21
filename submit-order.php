<?php

require_once('Files/functions.php');

$user = $_SESSION['user'];
$cartTotal = 0;

foreach ($_SESSION['cart'] as $key => $value) {
    $cartTotal += $value['pro']['selling_price'] * $value['quantity'];
}

if(!isset($_SESSION['cart'])){
    alert('warning', 'Please Add Products to Cart');
    header("Location: shop.php");
}else{
dbInsert('orders', [
    'customer_id' => $user['id'],
    'order_status' => 1,
    'shipping' => json_encode($_SESSION['shipping']),
    'cart' => json_encode($_SESSION['cart']),
    'total_price' => $cartTotal,
    'user' => json_encode($user),
    'date' => time()
]);

$_SESSION['shipping'] = null;
unset($_SESSION['cart']);
unset($_SESSION['shipping']);

header("Location: checkout-complete.php");
}