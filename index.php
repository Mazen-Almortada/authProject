<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <br>
    <br>
    <br>
    
    <br>
    <br>
    


    <center>
        <img src="images/icon.png" alt="" width="100" height="100">
        <br>
        <br>
        <br>
        <h3>Login</h3>
        <p>Welcome to MiQlad</p>
       
   
    
    <br>

    <main>
        <form action="loginProcess.php" method="post">
<br>
<br>

            <input type="text" placeholder="Email or Phone number" id="username" name="email" required>
            <br>
            

            <input type="password" id="password" placeholder="Password" name="pass" required>
            <a href="forgot_password.php" >Forgot Password?</a>
            <br>

            <button type="submit" name="login" >Login</button>
            <br>
            <p class="account">Don't have an account? <a id="signup" href="sign_up.php">Sign Up</a></p>
        </form>
    </main>
</center>
</body>
</html>
