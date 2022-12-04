<?php
session_start();
if (!isset($_SESSION['user'])){
    header('Location: ../public/index.php?file=auth');
}
var_dump($_SESSION['user']['login']);
?>
<link rel="stylesheet" href="../public/css/profile_settings.css">
<div class="profile-settings-container">
    <div class="profile-settings-title">
        <span>Profile settings</span>
    </div>
    <form class="profile-settings-form" action="../app/models/profile/profile_settings.php" method="post" enctype="multipart/form-data">

        <div class="profile-settings-section-1">

            <label for="avatar">Set avatar:</label><br>
            <input type="file" name="avatar"><br>

            <label for="description">Write description:</label><br>
            <textarea name="description"></textarea><br>

            <label for="country">Country:</label><br>
            <input type="text" name="country"><br>

            <label for="hometown">Hometown:</label><br>
            <input type="text" name="hometown"><br>


        </div>

        <div class="profile-settings-section-2">

            <label for="date_of_birth">Date of birth:</label><br>
            <input type="date" name="date_of_birth"><br>

            <label for="hobby">Your Hobby:</label><br>
            <textarea name="hobby"></textarea><br>

            <label for="relationship_id">Relationship:</label><br>
            <select name="relationship_id">
                <option>relationship</option>
            </select><br>

            <label for="languages">Languages:</label><br>
            <input type="text" name="languages"><br>

            <div class="btn-save">
                <button type="submit">Sign up</button>
            </div>
        </div>
    </form>
</div>



