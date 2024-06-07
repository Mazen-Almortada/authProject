<?php

include("conn.php");
$token = $_GET["token"];

$token_hash = hash("sha256", $token);



$sql = "SELECT * FROM users
        WHERE reset_token_hash = ?";

$stmt = mysqli_prepare($conn, $sql);
if (!$stmt) {
    die("Could not prepare statement: " . mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt,"s", $token_hash);

if (!mysqli_stmt_execute($stmt)) {
    die("Could not execute statement: " . mysqli_error($conn));
}




$result = $stmt->get_result();

$user = $result->fetch_assoc();

if ($user === null) {
    die("token not found");
}

if (strtotime($user["reset_token_expires_at"]) <= time()) {
    die("token has expired");
}


///////
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
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
       
        <h3>Reset Password</h3>
        
       
   
    
  

    <main>
        <form action="process-reset-password.php"  method="post">
<br>


<input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">           
            
            

            <input type="password" id="pass" placeholder="New Password" name="pass" required>
            <br>
            <input type="password" id="cpass"  name="cpass" placeholder="Confirm" required>
            

            <button type="submit" name="reset" >Reset</button>
            <br>
           <br>
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
