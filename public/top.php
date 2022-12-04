<?php
var_dump('top');
if (!isset($_SESSION['user'])){
    header('Location: ../public/index.php?file=auth');
}

