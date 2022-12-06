<?php
session_start();

if (!isset($_SESSION['user'])){
    header('Location: ../public/index.php?file=auth');
}

require_once '../app/database/connect.php';

$id = $_GET['id'];

$sql = "SELECT * FROM social_network.users WHERE id=?";

/** @var TYPE_NAME $pdo */
$query = $pdo->prepare($sql);
$query->execute([$id]);

$user = $query->fetch(PDO::FETCH_ASSOC);

var_dump($user);

$login = $user['login'];
$first_name = $user['first_name'];
$last_name = $user['last_name'];
$avatar = null;
$description = null;
$date_of_birth = null;
$hobby = null;
$country = null;
$hometown = null;
$relationship = null;
$languages = null;

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
