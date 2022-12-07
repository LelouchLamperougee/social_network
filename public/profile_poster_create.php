<div class="new-poster">
    <form action="../app/models/posts/create_post.php" method="post">
        <label>Write new post:</label><br>
        <input type="hidden" name="user_id" value="<?= $_GET['id'];?>">
        <input type="text" name="title" placeholder="Title"><br>
        <textarea name="text" placeholder="Text"></textarea><br>
        <button type="submit">Post</button>
    </form>
    <div class="create-post-manual">
        <div class="rules">
            <p>1.The title must be filled in</p>
            <p>2.The text-post must be filled in</p>
            <p>3.The title should not be more<br> than 30 characters</p>
            <p>4.The text-post should not be more<br> than 100 characters</p>
        </div>
    </div>
</div>