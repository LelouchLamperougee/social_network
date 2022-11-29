<?php
session_start();

require_once '../../database/connect.php';

$login = $_POST['login'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];

/** @var TYPE_NAME $connect */
mysqli_query($connect, "INSERT INTO social_network.users(`login`, `first_name`, `last_name`, `password`) VALUES ('$login', '$first_name', '$last_name', '$password')");


header('Location: ../../../public/index.php?file=auth');