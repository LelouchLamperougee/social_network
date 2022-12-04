<?php
session_start();

if (!isset($_SESSION['user'])){
    header('Location: ../public/index.php?file=auth');
}
?>

<link rel="stylesheet" href="../public/css/settings.css">
<div class="settings">
    <span id="account">Account</span>
    <span>/</span>
    <span id="profile">Profile</span>
    <hr>
    <div class="account-settings">
        <?php include_once '../public/account_settings.php'; ?>
    </div>
    <div class="profile-settings">
        <?php include_once '../public/profile_settings.php';?>
    </div>
</div>
<script src="../public/js/settings.js"></script>
