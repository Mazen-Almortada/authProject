<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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
       
        <h3>Forgot Password?</h3>
        <p>Enter your email below to reset your password</p>
       
   
    
  

    <main>
        <form action="send-password-reset.php"  method="post">
<br>
<br>
<br>
<br>


           
            <input type="email" placeholder="Email"  name="email" required>
            
            
            
<br>
<br>
<br>
<br>
           
            

            <button type="submit" name="resetpass" >Submit</button>

            <br>
<br>
        </form>
    </main>
</center>

</body>

</html>
