

<?php 
    $url = "localhost";
    $username = "root";
    $password = "";
    $db_name = "project_db";  
    $conn=mysqli_connect($url,$username,$password,$db_name);
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
    
    ?>

  