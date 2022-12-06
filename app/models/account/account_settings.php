<?php
session_start();
require_once '../../database/connect.php';

$id = $_SESSION['user']['id'];

$login = $_POST['login'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];

var_dump($id, $login, $first_name, $last_name);

if (empty($_POST['password'])) {
    $sql = "UPDATE social_network.users SET login=?, first_name =?, last_name=? WHERE id=?";

    /** @var TYPE_NAME $pdo */
    $query = $pdo->prepare($sql);
    $query->execute([$login, $first_name, $last_name, $id]);

} else {
    if ($password === $repeat_password) {
        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "UPDATE social_network.users SET login=?, first_name=?, last_name=?, password=? WHERE id=?";

        /** @var TYPE_NAME $pdo */
        $query=$pdo->prepare($sql);
        $query->execute([$login, $first_name, $last_name, $password, $id]);

    }
}

$redirect = 'Location: ../../../public/index.php?file=profile&id='.$id;
header($redirect);