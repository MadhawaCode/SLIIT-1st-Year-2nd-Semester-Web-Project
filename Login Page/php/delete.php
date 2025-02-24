<?php
session_start();
include("config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['userid'])) {
        $userid = $_POST['userid'];

        // Enable error reporting for debugging
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        try {
            // Prepare and execute the delete query
            $query = "DELETE FROM users WHERE User_Id = ?";
            $stmt = mysqli_prepare($con, $query);
            mysqli_stmt_bind_param($stmt, "i", $userid);
            $result = mysqli_stmt_execute($stmt);

            if ($result) {
                // If successful, destroy the session and respond with success
                session_destroy();
                echo "success";
            } else {
                // If there's an error, respond with an error message
                echo "error";
            }
        } catch (Exception $e) {
            // Handle any exceptions during the process
            echo "error";
        }
    }
}
?>
