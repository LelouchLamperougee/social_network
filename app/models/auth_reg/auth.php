<?php

session_start();
require_once '../../database/connect.php';

$login = trim($_POST['login']);
$password = trim($_POST['password']);

$sql = "SELECT * FROM `users` WHERE `login` = ?";
/** @var TYPE_NAME $pdo */
$query = $pdo->prepare($sql);

$query->execute([$login]);

$user = $query->fetch(PDO::FETCH_ASSOC);

if($user && password_verify($password, $user['password'])) {

    $_SESSION['user'] = [
        "id" => $user['id'],
        "login" => $user['login'],
        "first_name" => $user['first_name'],
        "last_name" => $user['last_name']
    ];

    header('Location: ../../../public/index.php?file=profile');

} else header('Location: ../../../public/index.php?file=auth');


