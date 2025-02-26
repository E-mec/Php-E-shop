<?php

require_once('Files/functions.php');

$email = trim($_POST['email']);
$password = trim($_POST['password']);

if(login($email, $password))
{
    header("Location: account-orders.php");
    die();
} else {
    alert('danger','You entered wrong Email or Password');
    header("Location: login.php");

}

// echo"<pre>";

// print_r($user);

// echo "</pre>";