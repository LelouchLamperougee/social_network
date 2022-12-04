<?php
session_start();
$file = $_GET['file'];
var_dump($_GET['file']);
?>

<link rel="stylesheet" href="css/menu.css">
<div class="menu">
    <div class="menu-title">
        <p>Navigation</p>
    </div>
    <div class="link-section">
        <ul>

            <?php
            if ($file === 'profile_settings' || $file === 'auth' || $file === 'register') {
                echo '';
            } else echo '
            <li><a href="../public/index.php?file=profile">My profile</a></li>
            <li><a href="../public/index.php?file=news">News</a></li>
            <li><a href="../public/index.php?file=top">Top</a></li>
            <li><a href="../public/index.php?file=settings">Settings</a></li>
                ';
            ?>


            <?php
            if (isset($_SESSION['user'])) {
                echo '<li><a href="../app/models/auth_reg/sign_out.php">Sign Out</a></li>';
            } else echo '<li><a href="../public/index.php?file=auth">Sign In</a></li>';
            ?>
        </ul>
    </div>
</div>
