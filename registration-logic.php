<?php

require_once('Files/functions.php');

$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$password_confirmation = trim($_POST['password_confirmation']);
$phone_number = trim($_POST['phone_number']);


$sql = "SELECT * FROM users WHERE email = '{$email}'";

$res = $conn->query($sql);

if ($res->num_rows > 0) {
    alert('danger', 'Email already exists');
    header('Location:login.php');
    die();
}

if ($password !== $password_confirmation) {
    alert('danger', 'Passwords do not match');
    header('Location:login.php');
    exit;
}

$created_at = date('m-d-y H:i:s');

$password = password_hash($password, PASSWORD_DEFAULT);

$user = "INSERT INTO users (
    first_name,
    last_name,
    email,
    password,
    phone_number,
    user_type,
    created_at
) VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$password}','{$phone_number}', 'customer', '{$created_at}') ";

if ($conn->query($user)) {
    login($email, $password);
    header("Location: account-orders.php");
} else {
    alert('danger', 'Registration failed');
    die();
}

// echo"<pre>";

// print_r($user);

// echo "</pre>";