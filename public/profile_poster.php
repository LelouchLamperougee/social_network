<?php
session_start();
require_once '../app/database/connect.php';

$user_id = $_GET['id'];

$sql = "SELECT * FROM social_network.posts WHERE user_id=?";

/** @var TYPE_NAME $pdo */
$query = $pdo->prepare($sql);
$query->execute([$user_id]);

$posts = $query->fetchAll(PDO::FETCH_ASSOC);


?>
<link rel="stylesheet" href="../public/css/profile_poster.css">
<div class="profile-poster">
    <?php
    if ($_SESSION['user']['id'] == $_GET['id']) {
        include_once '../public/profile_poster_create.php';
    }
    ?>

    <div class="all-poster">
        <?php
        foreach ($posts as $post) {
        ?>
            <div class="post">
                <form action="../app/models/posts/delete_post.php" method="post">
                    <input type="hidden" name="post_id" value="<?= $post['id']?>">
                    <span class="post-title"><?= $post['title'] ?></span>
                    <p><?= $post['text'] ?></p>
                    <span>Date: <?= $post['date_post'] ?> </span><br>
                    <button type="submit" style="font-size: 30px">&#10008;</button>
                </form>
            </div>

            <?php
        }
        ?>



    </div>
</div>
