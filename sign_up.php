<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <br>
    <br>
    <br>
    
   
    


    <center>
        <img src="images/icon.png" alt="" width="100" height="100">
        <br>
        <br>
       
        <h3>Sign Up</h3>
        <p>Find your dream car!</p>
       
   
    
  

    <main>
        <form action="signupProcess.php"  method="post">
<br>


            <input type="text" placeholder="Full name"  name="full_name" required>
            <input type="email" placeholder="Email"  name="email" required>
            <input type="text" placeholder="Phone number"  name="phone" required>
            
            

            <input type="password" id="pass" placeholder="Password" name="pass" required>
            <input type="password" id="cpass"  name="cpass" placeholder="Confirm" required>
            

            <button type="submit" name="signup" >Sign Up</button>
            <br>
            <p class="account">Already have an account? <a id="signup" href="index.php">Sign in</a></p>
        </form>
    </main>
</center>
<script>
 var password = document.getElementById("pass")
  , confirm_password = document.getElementById("cpass");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
</body>

</html>
