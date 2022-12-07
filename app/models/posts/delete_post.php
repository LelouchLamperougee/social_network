<?php
session_start();
$user_id = $_SESSION['user']['id'];
require_once '../../database/connect.php';

$post_id = $_POST['post_id'];

$sql = "DELETE FROM social_network.posts WHERE id = ?";

/** @var TYPE_NAME $pdo */
$query = $pdo->prepare($sql);
$query->execute([$post_id]);

$redirect = 'Location: ../../../public/index.php?file=profile&id='.$user_id;
header($redirect);
