<?php

session_start();
require_once '../../database/connect.php';

$login = $_POST['login'];
$password = $_POST['password'];

/** @var TYPE_NAME $connect */
$user_search = mysqli_query($connect, "SELECT * FROM `social_network`.`users` WHERE `login` = '$login' AND `password` = '$password'");

if (mysqli_num_rows($user_search)){

    $user = mysqli_fetch_assoc($user_search);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "login" => $user['login'],
        "first_name" => $user['first_name'],
        "last_name" => $user['last_name']
    ];

    header('Location: ../../../public/index.php?file=profile');
}