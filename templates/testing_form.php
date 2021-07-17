<?php
session_start();
$username = htmlspecialchars(trim($_POST['username']));
$email = htmlspecialchars(trim($_POST['email']));
$message = htmlspecialchars(trim($_POST['message']));

$_SESSION['username'] = $username;
$_SESSION['email'] = $email;
$_SESSION['message'] = $message;

if (strlen($username) <= 8){
    $error_username = 'Имя должно быть больше 8 символов';
}
$_SESSION['error_username'] = $error_username;
header('Location: testing.php');