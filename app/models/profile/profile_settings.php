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

$path_for_avatar = 'uploads/' . time() . $_FILES['avatar']['name'];
$move = '../../' . $path_for_avatar;
move_uploaded_file($_FILES['avatar']['tmp_name'], $move);


$search_profile_data = "SELECT * FROM `profiles` WHERE `user_id` = ?";

/** @var TYPE_NAME $pdo */
$query = $pdo->prepare($search_profile_data);
$query->execute([$user_id]);

$found_profile = $query->fetch(PDO::FETCH_ASSOC);
//var_dump($found_profile);

if (!$found_profile){
    $sql = 'INSERT INTO social_network.profiles(user_id, avatar, date_of_birth, description, hobby, country, relationship_id, hometown, languages) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)';

    $query = $pdo->prepare($sql);
    $query->execute([$user_id, $path_for_avatar, $date_of_birth, $description, $hobby, $country, $relationship_id, $hometown, $languages]);

} else{
    $sql = 'UPDATE social_network.profiles SET avatar=?, date_of_birth=?, description=?, hobby=?, country=?, relationship_id=?, hometown=?, languages=? WHERE user_id=?';

    $query = $pdo->prepare($sql);
    $query->execute([$path_for_avatar, $date_of_birth, $description, $hobby, $country, $relationship_id, $hometown, $languages, $user_id]);
}

$redirect = 'Location: ../../../public/index.php?file=profile&id='.$user_id;
header($redirect);



