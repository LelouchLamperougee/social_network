<?php
session_start();

if (isset($_SESSION['user'])){
    unset($_SESSION['user']);
}

header('Location: ../../../public/index.php?file=auth');