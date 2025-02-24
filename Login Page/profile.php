<?php
    session_start();
    include("php/config.php");
    if(!isset($_SESSION['valid'])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>Profile</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="profile.php">Ceylon Jurney</a></p>
        </div>
        <div class="right-links">

            <?php
                $userid = $_SESSION['userid'];
                $query = mysqli_query($con, "SELECT * FROM users WHERE User_Id='$userid'");

                while($result = mysqli_fetch_assoc($query)){
                    $res_Uname = $result['Username'];
                    $res_Fname = $result['Full_Name'];
                    $res_Email = $result['Email'];
                    $res_Country = $result['Country'];
                    $res_Cnumber = $result['Contact_Number'];
                    $res_Userid = $result['User_Id'];

                }

                
            ?>

            
            <a href="php/logout.php"><button class="btn">Log Out</button></a>
        </div>
    </div>
    <main>
    <div class="main-box">
            <h2>Your Profile Details</h2><br>
            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <th>Full Name</th>
                    <td><?php echo $res_Fname ?></td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td><?php echo $res_Uname ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo $res_Email ?></td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td><?php echo $res_Cnumber ?></td>
                </tr>
                <tr>
                    <th>Country</th>
                    <td><?php echo $res_Country ?></td>
                </tr>
            </table>
            
            <a href="../reservation/view_reservations.php" User_Id="<?php echo $res_Userid; ?>" class="btn"><center>Manage Reservation</center></a>
            <a href="../contact and hotels/readcontact.php" User_Id="<?php echo $res_Userid; ?>" class="btn"><center>Manage Contact Details</center></a>
            
            <a href="edit.php" User_Id="<?php echo $res_Userid; ?>" class="btn"><center>Change Profile</center></a>

            <button id="deleteButton" class="btn-delete" data-userid="<?php echo $res_Userid; ?>">Delete Profile</button>

            
    
        </div>
    </main>
</body>
</html>