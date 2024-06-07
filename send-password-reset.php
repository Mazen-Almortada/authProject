<?php
extract($_POST);
include("conn.php");



$token = bin2hex(random_bytes(16));

$token_hash = hash("sha256", $token);

$expiry = date("Y-m-d H:i:s", time() + 60 * 30);



$sql = "UPDATE users
        SET reset_token_hash = ?,
            reset_token_expires_at = ?
        WHERE Email = ?";
$stmt = mysqli_prepare($conn, $sql);
if (!$stmt) {
    die("Could not prepare statement: " . mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sss", $token_hash, $expiry, $email);

if (!mysqli_stmt_execute($stmt)) {
    die("Could not execute statement: " . mysqli_error($conn));
}

$affected_rows = mysqli_affected_rows($conn);

if ($affected_rows > 0) {

    $mail = require __DIR__ . "/mailer.php";

    $mail->setFrom("abo@gmail.com");
    $mail->addAddress($email);
    $mail->Subject = "Password Reset";
    $mail->Body = <<<END

    Click <a href="http://localhost:8080/authProject/reset-password.php?token=$token">here</a> 
    to reset your password.

    END;

    try {

        $mail->send();

    } catch (Exception $e) {

        echo "Message could not be sent. Mailer error: {$mail->ErrorInfo}";

    }

}

echo "Message sent, please check your inbox.";
