<?php


$conn = new mysqli("127.0.0.1", "root", "9999", "miqlad");


if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}


$car_image_url = $_POST['car_image_url'];
$car_name = $_POST['car_name'];
$car_owner_name = $_POST['car_owner_name'];
$car_price = $_POST['car_price'];
$car_state = "Available";


$sql = "INSERT INTO car (Car_Name, Car_Pic, Car_Owner, Car_Price,Car_State)
VALUES ('$car_name', '$car_image_url', '$car_owner_name', '$car_price','$car_state')";

if ($conn->query($sql) === TRUE) {
  header("Location: con.php");
} else {
    echo "حدث خطأ أثناء إدخال البيانات: " . $conn->error;
}


$conn->close();
?>