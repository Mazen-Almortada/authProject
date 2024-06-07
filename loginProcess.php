<?php
session_start();
if(isset($_POST['login']))
{
    
    extract($_POST);
    include 'conn.php';
    $sql=mysqli_query($conn,"SELECT * FROM users where Email='$email' and Password='$pass'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["ID"] = $row['ID'];
        $_SESSION["Full_Name"]=$row['Full_Name'];
         
       
        header("Location: dashboard.php"); 
    }
    else
    {
       
        echo "<center><h1>Invalid Email ID/Password</h1>";
    }
}
?>