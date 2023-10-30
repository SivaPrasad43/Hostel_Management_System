<?php
// Include your database connection file
include '../../connection/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    // Get the ID from the POST data
    $id = $_POST['id'];

    // SQL query to update the 'hs' field to 1
    $query = "UPDATE attendance SET hs = 1 WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        // Update successful
        echo 'Attendance marked as confirmed successfully.';
    } else {
        // Update failed
        echo 'Error marking attendance as confirmed: ' . mysqli_error($conn);
    }
} else {
    // Handle invalid or missing data
    echo 'Invalid request.';
}
?>
