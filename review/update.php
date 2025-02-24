<?php

require 'config.php'; 

$reviewId = $_POST["reviewid"];
$email = $_POST["useremail"];
$reviewType = $_POST["reviewtype"];
$rating = $_POST["rating"];
$descrip = $_POST["Description"];
$date = $_POST["udate"];


if (empty($reviewId) || empty($email) || empty($reviewType) || empty($rating) || empty($descrip) || empty($date)) {
    echo "All fields are required.";
} else {
    
    $sql = "UPDATE reviews SET reviewType=?, rating=?, descrip=?, date=? WHERE reviewId=? AND email=?";
    $stmt = $con->prepare($sql);
    
    
    $stmt->bind_param("sisssi", $reviewType, $rating, $descrip, $date, $reviewId, $email);
    
    
    if ($stmt->execute()) {
        echo "<script>
        alert('Update succsess');
        window.location.href = 'read.php';
    </script>";
    } else {
        echo "Update failed: " . $stmt->error;
    }
    
    
    $stmt->close();
    $con->close();
}

?> 