<?php

define('BASEPATH', 'localhost:8080');

$conn = new mysqli('localhost', 'root', '', 'e-shop');



if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function url($path = '/'){
    return BASEPATH.$path;
}

function authorized_user()
{
    if(!isset($_SESSION['user']))
    {
        alert("warning", "Please login");
        header('Location: login.php');

        die();
    }
}

function logout(){
    if(isset($_SESSION['user']))
    {
        unset($_SESSION['user']);
    }

    header("Location:login.php");
}

function loggedIn()
{
    if(isset($_SESSION['user'])){
        return true;
    }else{
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
