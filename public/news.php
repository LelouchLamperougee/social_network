<?php
var_dump('news');
if (!isset($_SESSION['user'])){
    header('Location: ../public/index.php?file=auth');
}
