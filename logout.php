<?php
    session_start();
    unset($_SESSION["ID"]);
    unset($_SESSION["Full_Name"]);
    header("Location:index.php");
?>