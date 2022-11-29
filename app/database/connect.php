<?php

$host = 'localhost';
$user = 'root';
$password = 's8z@I64q21#M9Ib@$#c7';
$db = 'social_network';
$connect = mysqli_connect($host, $user, $password, $db);

if (!$connect){
    exit('DATABASE ERROR');
}