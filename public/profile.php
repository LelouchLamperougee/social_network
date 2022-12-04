<?php
session_start();

if (!isset($_SESSION['user'])){
    header('Location: ../public/index.php?file=auth');
}

$login = $_SESSION['user']['login'];
$first_name = $_SESSION['user']['first_name'];
$last_name = $_SESSION['user']['last_name'];

//$today=date("m.d.y");
//var_dump($today);
//

$avatar = $_SESSION['user']['avatar'];
$description = $_SESSION['user']['description'];
$date_of_birth = $_SESSION['user']['date_of_birth'];
$hobby = $_SESSION['user']['hobby'];
$country = $_SESSION['user']['country'];
$hometown = $_SESSION['user']['hometown'];
$relationship = $_SESSION['user']['relationship_id'];
$languages = $_SESSION['user']['languages'];

if ($avatar === null){
$avatar = 'uploads/avatar.jpg';
}


?>
<link rel="stylesheet" href="../public/css/profile.css">

<div class="profile-container">

    <div class="profile-info">

        <div class="profile-info-section1">
            <div class="profile-avatar">
                <img src="../app/<?php echo $avatar ?>">
            </div>
            <div class="profile-data">

                <span class="login">login: <?= $login;?></span><br>
                <span class="text-info">name: <?= $first_name;?></span><br>
                <span class="text-info">surname: <?= $last_name;?></span><br>

                <span class="text-info">date of birth: <?= $date_of_birth;?></span><br>
                <span class="text-info">hobby/hobbies: <?= $hobby;?></span><br>
                <span class="text-info">country: <?= $country;?></span><br>
                <span class="text-info">hometown: <?= $hometown;?></span><br>
                <span class="text-info">relationship: <?= $relationship;?></span><br>
                <span class="text-info">languages: <?= $languages;?></span><br>

            </div>
        </div>


        <hr>

        <div class="profile-info-section2">
            <div class="profile-description">
                <span> <?php echo $description;?></span>
            </div>
        </div>

    </div>

    <div class="profile-statistic">
        STATISTIC
    </div>
</div>
