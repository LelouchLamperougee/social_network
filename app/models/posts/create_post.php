<?php

require_once '../../database/connect.php';

$user_id = $_POST['user_id'];
$title = $_POST['title'];
$text = $_POST['text'];
$date = date('d.m.Y');

$sql = "INSERT INTO social_network.posts(user_id, title, text, date_post) VALUES (?, ?, ?, ?)";

/** @var TYPE_NAME $pdo */
$query = $pdo->prepare($sql);
$query->execute([$user_id, $title, $text, $date]);

$redirect = 'Location: ../../../public/index.php?file=profile&id='.$user_id;
header($redirect);


