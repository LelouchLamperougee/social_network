<?php
session_start();

require_once '../../database/connect.php';

$login = trim($_POST['login']);
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$password = trim($_POST['password']);
$repeat_password = trim($_POST['repeat_password']);

if (!empty($login) && $password === $repeat_password && !empty($password) && !empty($first_name) && !empty($last_name)) {

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = 'INSERT INTO social_network.users(login, first_name, last_name, password) VALUES(:login, :first_name, :last_name, :password)';
    $params = ['login' => $login, 'first_name' => $first_name, 'last_name' => $last_name, ':password' => $password];

    /** @var TYPE_NAME $pdo */

    $query = $pdo->prepare($sql);
    $query->execute($params);

    header('Location: ../../../public/index.php?file=auth');

} else {
    header('Location: ../../../public/index.php?file=register');
}





