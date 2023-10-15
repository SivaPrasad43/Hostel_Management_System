<?php
// Assuming you have established a database connection ($conn)
// Replace 'your_database_name' with the actual name of your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get values from the form
    $username= $_POST['username']; // Assuming username is equivalent to the 'id' field in your staff table
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Perform SQL query
    $sql = "SELECT COUNT(*) as total FROM login WHERE username = '$username' AND password = '$password' AND user_type = '$role'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    // Fetch the result
    $row = mysqli_fetch_assoc($result);
    $total = $row['total'];

    // Check if the user credentials are valid
    if ($total > 0) {
        // Successful login

        // Redirect based on user role
        switch ($role) {
            case 'student':
                header('Location: dashboard/student_dashboard.php');
                break;
            case 'warden':
                header('Location: dashboard/warden_dashboard.php');
                break;
            case 'ms':
                header('Location: dashboard/mess_secretary_dashboard.php');
                break;
            case 'hs':
                header('Location: dashboard/hostel_secretary_dashboard.php');
                break;
            case 'matron':
                header('Location: dashboard/matron_dashboard.php');
                break;
            default:
                // Redirect to a default page if the role is not recognized
                header('Location: default_dashboard.php');
                break;
        }

        // You may also set session variables here if needed
        exit(); // Ensure that the script stops execution after redirection
    } else {
        // Invalid login
        echo "Invalid username, password, or role.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
