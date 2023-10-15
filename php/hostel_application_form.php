<?php
// Include your connection.php file
include '../connection/connection.php';

// Check if the form is submitted
if (isset($_POST['submit'])) {

    // Function to clean and validate data
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Escape user inputs to prevent SQL injection
    $name = test_input($_POST['name']);
    $gender = test_input($_POST['gender']);
    $degree = test_input($_POST['degree']);
    $yearOfStudy = test_input($_POST['yearOfStudy']);
    $admissionNo = test_input($_POST['admissionNo']);
    $semester = test_input($_POST['semester']);
    $branch = test_input($_POST['branch']);
    $pAddress = test_input($_POST['pAddress']);
    $gAddress = test_input($_POST['gAddress']);
    $mobile = test_input($_POST['mobile']);
    $gMobile = test_input($_POST['gMobile']);
    $prAddress = test_input($_POST['prAddress']);
    $priority = isset($_POST['p1']) ? 'p1' : (isset($_POST['p2']) ? 'p2' : 'other');
    $aIncome = test_input($_POST['aIncome']);
    $obcOrOec = isset($_POST['obcOrOec']) ? 'obcOrOecYes' : 'obcOrOecNo';
    $googleDistance = test_input($_POST['distance']);
    $sgpa1 = test_input($_POST['sgpa1']);
    $sgpa2 = test_input($_POST['sgpa2']);
    $sgpa3 = test_input($_POST['sgpa3']);
    $sgpa4 = test_input($_POST['sgpa4']);
    $sgpa5 = test_input($_POST['sgpa5']);
    $sgpa6 = test_input($_POST['sgpa6']);
    $sgpa7 = test_input($_POST['sgpa7']);
    $sgpa8 = test_input($_POST['sgpa8']);
    $rank = test_input($_POST['rank']);
    $disciplinaryAction = test_input($_POST['dAction']);

    // Convert null values to 0
    
    // Use prepared statements to prevent SQL injection
    // Prepare the statement
    $sql = $conn->prepare("INSERT INTO `hostel_admission` (`name`, `gender`, `degree`, `yearOfStudy`, `admissionNo`, `semester`, `branch`, `pAddress`, `gAddress`, `mobile`, `gMobile`, `prAddress`, `priority`, `aIncome`, `obcOrOec`, `googleDistance`, `sgpa1`, `sgpa2`, `sgpa3`, `sgpa4`, `sgpa5`, `sgpa6`, `sgpa7`, `sgpa8`, `rank`, `disciplinaryAction`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if (!$sql) {
        die("Error in SQL query: " . $conn->error);
    }

    // Bind parameters is not needed in this case

    // Execute the statement
    if ($sql->execute()) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql->error;
    }

    // No need to close the statement; it's done automatically when the script finishes.
}

// Close the database connection
$conn->close();
?>
