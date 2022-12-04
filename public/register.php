<link rel="stylesheet" href="css/auth.css">
<div class="auth">
    <div class="auth-title">
        <p>Create account</p>
        <span class="marker">*all fields are required</span>
    </div>
    <form class="form-auth" action="../app/models/auth_reg/register.php" method="post">

        <input type="text" name="login" placeholder="Login"><br>
        <input type="text" name="first_name" placeholder="First name"><br>
        <input type="text" name="last_name" placeholder="Last name"><br>
        <input type="password" name="password" placeholder="Enter your password"><br>
        <input type="password" name="repeat_password" placeholder="Repeat your password"><br>

        <input class="submit" type="submit" value="Sign up"><br>

    </form>

    <!--    <p>Log in to access the social network and your account</p>-->
</div>