<?php
session_start();
require_once '../../database/connect.php';

$user_id = $_SESSION['user']['id'];
var_dump('id:'.$user_id);
$date_of_birth = $_POST['date_of_birth'];
$description = $_POST['description'];
$hobby = $_POST['hobby'];
$country = $_POST['country'];
$relationship_id = $_POST['relationship'];
$hometown = $_POST['hometown'];
$languages = $_POST['languages'];

var_dump('good');

$path_for_avatar = 'uploads/' . time() . $_FILES['avatar']['name'];
$move = '../../' . $path_for_avatar;
move_uploaded_file($_FILES['avatar']['tmp_name'], $move);

var_dump('good');
$sql = 'INSERT INTO social_network.profiles(user_id, avatar, date_of_birth, description, hobby, country, relationship_id, hometown, languages) VALUES(:user_id, :avatar, :date_of_birth, :description, :hobby, :country, :relationship_id, :hometown, :languages)';
var_dump('good');

$params = [
    'user_id' => $user_id,
    'avatar' => $path_for_avatar,
    'date_of_birth' => $date_of_birth,
    'description' => $description,
    'hobby' => $hobby,
    'country' => $country,
    'relationship_id' => $relationship_id,
    'hometown' => $hometown,
    'languages' => $languages
];


/** @var TYPE_NAME $pdo */
var_dump('gg');

$query = $pdo->prepare($sql);
$query->execute($params);

var_dump('exit');

$redirect = 'Location: ../../../public/index.php?file=profile&id='.$user_id;
header($redirect);



