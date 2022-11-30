<?php
session_start();

if (!isset($_SESSION['user'])){
    header('Location: ../public/index.php?file=auth');
}

$login = $_SESSION['user']['login'];
$first_name = $_SESSION['user']['first_name'];
$last_name = $_SESSION['user']['last_name'];

?>
<link rel="stylesheet" href="../public/css/profile.css">

<div class="profile-container">

    <a href="../app/models/auth_reg/sign_out.php">Sign Out</a>
    <div class="profile-info">

        <div class="profile-info-section1">
            <div class="profile-avatar">
                <img src="https://uzfor.uz/files/users/photo/213_1569522681.jpg">
            </div>
            <div class="profile-data">
                <span class="login">login: <?php echo $login;?></span><br>
                <span>name: <?php echo $first_name;?></span><br>
                <span>surname: <?php echo $last_name;?></span><br>
            </div>
        </div>


        <hr>

        <div class="profile-info-section2">
            <div class="profile-description">
                <span>description: mfvndkvokewagnkewrjkklgb bjilgrnnogn pqo;qorw ejibp efhq uf u f qbibi bi biqbibf wqf </span>
            </div>
        </div>

    </div>

    <div class="profile-statistic">
        STATISTIC
    </div>
</div>
