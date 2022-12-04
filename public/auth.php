<?php
if (isset($_SESSION['user'])){
    header('Location: ../public/index.php?file=profile');
}
?>

<link rel="stylesheet" href="css/auth.css">
<div class="auth">
    <div class="auth-title">
        <p>Sign In</p>
        <span class="marker">*all fields are required</span>
    </div>
    <form class="form-auth" action="../app/models/auth_reg/auth.php" method="post">
        <input type="text" name="login" placeholder="Login"><br>
        <input type="password" name="password" placeholder="Enter your password"><br>
        <p class="marker">Don't you have an account? - <a class="marker" href="../public/index.php?file=register">Register</a> </p><br>
        <input class="submit" type="submit" value="Sign in"><br>
    </form>
</div>