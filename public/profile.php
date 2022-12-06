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

$login = $user['login'];
$first_name = $user['first_name'];
$last_name = $user['last_name'];

if ($user){
    $sql = "SELECT * FROM social_network.profiles WHERE user_id=?";

    $query=$pdo->prepare($sql);
    $query->execute([$id]);

    $profiles = $query->fetch(PDO::FETCH_ASSOC);
}

$avatar = $profiles['avatar'];
$description = $profiles['description'];
$date_of_birth = $profiles['date_of_birth'];
$hobby = $profiles['hobby'];
$country = $profiles['country'];
$hometown = $profiles['hometown'];
$relationship = $profiles['relationship_id'];
$languages = $profiles['languages'];

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

                <span class="login">Login: <?= $login;?></span><br>
                <span class="text-info">Name: <?= $first_name;?></span><br>
                <span class="text-info">Surname: <?= $last_name;?></span><br>

                <span class="text-info">Date of birth: <?= $date_of_birth;?></span><br>
                <span class="text-info">Hobby: <?= $hobby;?></span><br>
                <span class="text-info">Country: <?= $country;?></span><br>
                <span class="text-info">Hometown: <?= $hometown;?></span><br>
                <span class="text-info">Relationship: <?= $relationship;?></span><br>
                <span class="text-info">Languages: <?= $languages;?></span><br>

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
