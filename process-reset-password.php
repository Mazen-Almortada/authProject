<?php

include("conn.php");
$token = $_POST["token"];

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


$sql = "UPDATE users
        SET Password = ?,
            reset_token_hash = NULL,
            reset_token_expires_at = NULL
        WHERE ID = ?";

$stmt = mysqli_prepare($conn, $sql);
if (!$stmt) {
    die("Could not prepare statement: " . mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt,"ss",$_POST["pass"],$user["ID"]);

if (!mysqli_stmt_execute($stmt)) {
    die("Could not execute statement: " . mysqli_error($conn));
}
///////

echo "<center><h2>Password updated. You can now login. <br> Back to <a href='index.php'>Login Page</a></h2>";

?>