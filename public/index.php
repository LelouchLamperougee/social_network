<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>socialNET</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">

</head>
<body>
<div class="container">
    <?php require_once '../public/header.php' ?>
    <div class="content-section">
        <div class="menu-section">
            <?php require_once '../public/menu.php' ?>
        </div>
        <div class="content">


            <?php

            $file = "auth";

            if (isset($_GET['file'])) {
                $file = $_GET['file'];
            }

            var_dump($file);

            include ('../public/'.$file.'.php');

            ?>
        </div>
    </div>

</div>
</body>
</html>