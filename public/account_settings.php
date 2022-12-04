<?php
session_start();
$login = $_SESSION['user']['login'];
$first_name = $_SESSION['user']['first_name'];
$last_name = $_SESSION['user']['last_name'];
?>

<link rel="stylesheet" href="css/auth.css">
<div class="auth">
    <div class="auth-title">
        <p>Account settings</p>
        <span class="marker">*all fields are required</span>
    </div>
    <form class="form-auth" action="" method="post">

        <input type="text" value="<?= $login;?>" name="login" placeholder="Login"><br>
        <input type="text" value="<?= $first_name ?>" name="first_name" placeholder="First name"><br>
        <input type="text" value="<?= $last_name ?>" name="last_name" placeholder="Last name"><br>

        <input id="btn-change-password" class="submit" type="button" value="change password">

        <div class="password_section">
            <input type="password" name="password" placeholder="Enter your password"><br>
            <input type="password" name="repeat_password" placeholder="Repeat your password"><br>
        </div>


        <input class="submit" type="submit" value="Update"><br>

    </form>
</div>
<script src="../public/js/account_settings.js"></script>