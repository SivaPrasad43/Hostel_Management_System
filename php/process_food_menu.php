<?php
session_start(); // Start the session

// Include the database connection file
include '../connection/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the session information (if available)

    // Check if the admission number exists and is valid
        // Get the input data from the form
        $breakfast_item = $_POST['breakfast_item'];
        $lunch_item = $_POST['lunch_item'];
        $evening_item = $_POST['evening_item'];
        $dinner_item = $_POST['dinner_item'];

        // Insert the food menu items into the database
        $insertSql = "INSERT INTO food_menu (breakfast_item, lunch_item, evening_item, dinner_item) VALUES (?, ?, ?, ?)";
        $insertStmt = $conn->prepare($insertSql);
        $insertStmt->bind_param("ssss", $breakfast_item, $lunch_item, $evening_item, $dinner_item);

        if ($insertStmt->execute()) {
            echo "Food menu items added successfully.";
        } else {
            echo "Error: " . $insertStmt->error;
        }

        $insertStmt->close();
   
} else {
    echo "Invalid request method.";
}
?>

