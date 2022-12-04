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

$user_id = $user['id'];

if($user && password_verify($password, $user['password'])) {

    $sql = "SELECT * FROM `profiles` WHERE `user_id` = ?";
    $query = $pdo->prepare($sql);
    $query->execute([$user_id]);
    $profile = $query->fetch(PDO::FETCH_ASSOC);


    $_SESSION['user'] = [
        "id" => $user['id'],
        "login" => $user['login'],
        "first_name" => $user['first_name'],
        "last_name" => $user['last_name'],

        'user_id' => $profile['id'],
        'avatar' => $profile['avatar'],
        'date_of_birth' => $profile['date_of_birth'],
        'description' => $profile['description'],
        'hobby' => $profile['hobby'],
        'country' => $profile['country'],
        'relationship_id' => $profile['relationship_id'],
        'hometown' => $profile['hometown'],
        'languages' => $profile['languages']
    ];

    header('Location: ../../../public/index.php?file=profile');

} else header('Location: ../../../public/index.php?file=auth');


