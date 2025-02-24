<?php
require 'conconfig.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
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

    $sql = "UPDATE reservations SET first_name='$first_name', last_name='$last_name', email='$email', phone='$phone', 
            country='$country', city='$city', hotel='$hotel', room_type='$room_type', checkin='$checkin', 
            checkout='$checkout', guests='$guests' WHERE id='$id'";

    if ($con->query($sql) === TRUE) {
        echo "Reservation updated successfully";
    } else {
        echo "Error updating reservation: " . $con->error;
    }

    $con->close();
} else {
    $id = $_GET['id'];
    $result = $con->query("SELECT * FROM reservations WHERE id='$id'");
    $row = $result->fetch_assoc();
}
?>


<form action="edit_reservation.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label for="first-name">First Name:</label>
    <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" required>
   
    <button type="submit">Update Reservation</button>
</form>
