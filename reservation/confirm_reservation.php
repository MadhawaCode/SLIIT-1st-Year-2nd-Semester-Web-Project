<?php
require 'conconfig.php';


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$city = $_POST['city'];
$hotel = $_POST['hotel'];
$room_type = $_POST['room_type'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$guests = $_POST['guests'];


$sql = "INSERT INTO reservations (first_name, last_name, email, phone, country, city, hotel, room_type, checkin, checkout, guests) 
        VALUES ('$first_name', '$last_name', '$email', '$phone', '$country', '$city', '$hotel', '$room_type', '$checkin', '$checkout', '$guests')";


if ($con->query($sql) === TRUE) {
    echo "<script>alert('Reservation successfully made');window.location.href='userdah.php'; </script>";
} else {
    echo "Error: " . $con->error;
}


$con->close();
?>
