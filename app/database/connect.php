<?php

$driver = 'mysql';
$host = 'localhost';
$db = 'social_network';
$user = 'root';
$password = 's8z@I64q21#M9Ib@$#c7';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$dsn ="$driver:host=$host;dbname=$db;charset=$charset";


try {
    $pdo = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e){
    die("ERROR DATABASE");
}
