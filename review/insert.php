<?php
require 'config.php';

$email = $_POST["useremail"];
$reviewType = $_POST["reviewtype"];
$rating = $_POST["rating"];
$descrip = $_POST["Description"];
$date = $_POST["udate"];

$sql = "INSERT INTO reviews (email, reviewType, rating, descrip, date) VALUES ('$email', '$reviewType', '$rating', '$descrip', '$date')";

if ($con->query($sql) === TRUE) {
    echo "<script>
        alert('Insert Successful');
        window.location.href = 'read.php';
    </script>";
} else {
    echo "<script>
        alert('Error: " . $con->error . "');
    </script>";
}

$con->close();
?>
