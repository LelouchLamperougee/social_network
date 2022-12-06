<?php
session_start();
$id = $_SESSION['user']['id'];
var_dump($id);
$file=$_GET['file'];
?>

<link rel="stylesheet" href="css/menu.css">
<div class="menu">
    <div class="menu-title">
        <p>Navigation</p>
    </div>
    <div class="link-section">
        <ul>

            <li><a href="../public/index.php?file=profile&id=<?= $id ?>">My profile</a></li>
            <li><a href="../public/index.php?file=news&id=<?= $id ?>">News</a></li>
            <li><a href="../public/index.php?file=top&id=<?= $id ?>">Top</a></li>
            <li><a href="../public/index.php?file=settings&id=<?= $id ?>">Settings</a></li>

            <?php
            if (isset($_SESSION['user'])) {
                echo '<li><a href="../app/models/auth_reg/sign_out.php">Sign Out</a></li>';
            } else echo '<li><a href="../public/index.php?file=auth">Sign In</a></li>';
            ?>
        </ul>
    </div>
</div>
