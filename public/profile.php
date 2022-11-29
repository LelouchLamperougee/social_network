<?php
session_start();

echo $_SESSION['user']['login'];
echo $_SESSION['user']['first_name'];
echo $_SESSION['user']['last_name'];
