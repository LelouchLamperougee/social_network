<?php
session_start();

if (!isset($_SESSION['user'])){
    header('Location: ../public/index.php?file=auth');
}

$login = $_SESSION['user']['login'];
$first_name = $_SESSION['user']['first_name'];
$last_name = $_SESSION['user']['last_name'];

$avatar = $_SESSION['user']['avatar'];
$description = $_SESSION['user']['description'];
$date_of_birth = $_SESSION['user']['date_of_birth'];
$hobby = $_SESSION['user']['hobby'];
$country = $_SESSION['user']['country'];
$hometown = $_SESSION['user']['hometown'];
$relationship = $_SESSION['user']['relationship_id'];
$languages = $_SESSION['user']['languages'];


?>
<link rel="stylesheet" href="../public/css/profile.css">

<div class="profile-container">

    <a href="../app/models/auth_reg/sign_out.php">Sign Out</a>
    <div class="profile-info">

        <div class="profile-info-section1">
            <div class="profile-avatar">
                <img src="../app/<?php echo $avatar ?>">
            </div>
            <div class="profile-data">

                <span class="login">login: <?php echo $login;?></span><br>
                <span>name: <?php echo $first_name;?></span><br>
                <span>surname: <?php echo $last_name;?></span><br>

                <span>date of birth: <?php echo $date_of_birth;?></span><br>
                <span>hobby/hobbies: <?php echo $hobby;?></span><br>
                <span>country: <?php echo $country;?></span><br>
                <span>hometown: <?php echo $hometown;?></span><br>
                <span>relationship: <?php echo $relationship;?></span><br>
                <span>languages: <?php echo $languages;?></span><br>

            </div>
        </div>


        <hr>

        <div class="profile-info-section2">
            <div class="profile-description">
                <span>description:  <?php echo $description;?></span>
            </div>
        </div>

    </div>

    <div class="profile-statistic">
        STATISTIC
    </div>
</div>
