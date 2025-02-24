<?php
require 'conconfig.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view.css">
    <title>Reservations</title>
</head>
<body>
    <?php
        $sql = "SELECT * FROM reservations";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
                            <th>Guests</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['first_name']} {$row['last_name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['checkin']}</td>
                        <td>{$row['checkout']}</td>
                        <td>{$row['guests']}</td>
                        <td>
                            <a href='edit_reservation.php?id={$row['id']}'>Edit</a>
                            <a href='delete_reservation.php?id={$row['id']}'>Delete</a>
                        </td>
                    </tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "No reservations found.";
        }

        $con->close();
    ?>
</body>
</html>
