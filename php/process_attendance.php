<?php
session_start(); // Start the session
$admission = $_SESSION['username'];

// Include the database connection file
include '../connection/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $attendanceType = $_POST['attendance_type']; // 'morning' or 'night'

    // Retrieve student details based on the admission number
    $sql = "SELECT * FROM hostel_student_list WHERE admissionNo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $admission);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $name = $row['name'];
            $branch = $row['branch'];
            $semester = $row['semester'];

            // Insert the attendance record into the database
            $insertSql = "INSERT INTO attendance (name, admission_no, branch, semester, $attendanceType) VALUES (?, ?, ?, ?, 1)";
            $insertStmt = $conn->prepare($insertSql);
            $insertStmt->bind_param("sssi", $name, $admission, $branch, $semester);

            if ($insertStmt->execute()) {
                echo "Attendance marked successfully.";
            } else {
                echo "Error: " . $insertStmt->error;
            }

            $insertStmt->close();
        } else {
            echo "Student with admission number $admission not found.";
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid request method.";
}
?>
