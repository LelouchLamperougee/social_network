<?php
var_dump($_GET['file']);
?>

<link rel="stylesheet" href="css/menu.css">
<div class="menu">
    <div class="menu-title">
       <p>Navigation</p>
    </div>
    <div class="link-section">
        <ul>
            <li><a href="../public/index.php?file=profile">My profile</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Popular</a></li>
            <li><a href="#">Top profiles</a></li>
            <li><a href="../public/index.php?file=profile_settings">Profile settings</a></li>
            <li><a href="../public/index.php?file=auth">Log In</a></li>
            <li><a href="../public/index.php?file=register">Create account</a></li>
        </ul>
    </div>
</div>
