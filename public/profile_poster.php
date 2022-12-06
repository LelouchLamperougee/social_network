<?php

?>
<link rel="stylesheet" href="../public/css/profile_poster.css">
<div class="profile-poster">
    <?php
    if ($_SESSION['user']['id'] == $_GET['id']) {
        include_once '../public/profile_poster_create.php';
    }
    ?>
    <div class="all-poster">

        <div class="post">
            <span class="post-title">POST TITLE</span>
            <p>POST TEXT</p>
            <span>DATE</span>
        </div>

        <div class="post">
            <span class="post-title">POST TITLE</span>
            <p>POST TEXT</p>
            <span>DATE</span>
        </div>

        <div class="post">
            <span class="post-title">POST TITLE</span>
            <p>POST TEXT</p>
            <span>DATE</span>
        </div>

        <div class="post">
            <span class="post-title">POST TITLE</span>
            <p>POST TEXT</p>
            <span>DATE</span>
        </div>


    </div>
</div>
