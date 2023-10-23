<?php
// Include the database connection file
include '../connection/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $attendanceType = $_POST['attendance_type']; // 'morning' or 'night'

    // Get the current date and time
    $now = new DateTime();
    $morningStartTime = new DateTime($now->format('Y-m-d') . ' 08:00:00');
    $morningEndTime = new DateTime($now->format('Y-m-d') . ' 10:29:59');
    $nightStartTime = new DateTime($now->format('Y-m-d') . ' 21:00:00');
    $nightEndTime = new DateTime($now->format('Y-m-d') . ' 21:29:59');

    if (($attendanceType === 'morning' && $now >= $morningStartTime && $now <= $morningEndTime) ||
        ($attendanceType === 'night' && $now >= $nightStartTime && $now <= $nightEndTime)) {
        // Attendance is within the allowed time
        // Perform database update or insertion here

        // For demonstration, we'll just print a success message
        echo "Attendance marked successfully.";
    } else {
        // Attendance is not within the allowed time
        echo "Attendance can only be marked during the specified time period.";
    }
} else {
    echo "Invalid request method.";
}
?>
