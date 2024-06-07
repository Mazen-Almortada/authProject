<?php
extract($_POST);
include("conn.php");
$sql=mysqli_query($conn,"SELECT * FROM users where Email='$email'");
if(mysqli_num_rows($sql)>0)
{
    echo "Email Id Already Exists"; 
	exit;
}
$sql=mysqli_query($conn,"SELECT * FROM users where Phone='$phone'");
if(mysqli_num_rows($sql)>0)
{
    echo "Phone Number Already Exists"; 
	exit;
}
else if(isset($_POST['signup']))
{
    $query="INSERT INTO users(Full_Name, Phone, Email, Password ) VALUES ('$full_name', '$phone', '$email', '$pass')";
    $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
    header("Location:index.php");
  
  
}

?>