<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="center">
            <h1>Login</h1>
            <form name="form" action="login.php" method="Post">
                <div class="txt_field">
                    <input type="text" id="user" name="user" required>
                    <span></span>
                    <label>Username</label>
                </div>
                <div class="txt_field">
                    <input type="password" id="pass" name="pass" required>
                    <span></span>
                    <label>Password</label>
                </div>
                <div class="pass">Forgot Password?</div>

                <input type="submit" id="btn" value="Login" name="submit">

                <div class="signup_link">
                    Not a member? <a href="#">Signup</a>
                </div>
            </form>
        </div>
        
    </body>
</html>