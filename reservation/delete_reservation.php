<?php
require 'conconfig.php';

$id = $_GET['id'];
$sql = "DELETE FROM reservations WHERE id='$id'";

if ($con->query($sql) === TRUE) {
    echo "<script>alert('Reservation deleted successfully');window.location.href='userdah.php'; </script>";
    
} else {
    echo "<script>alert('Error deleting reservation: ');window.location.href='userdah.php'; </script> " . $con->error;
}

$con->close();
header("Location: view_reservations.php"); 
?>
