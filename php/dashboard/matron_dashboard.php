<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, 
				initial-scale=1.0">
    <title>RIT Hostel</title>
    <link rel="stylesheet" href="../../style/dash-style.css">
    <link rel="stylesheet" href="../../style/responsive.css">
    <style>
    /* Style for the table */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
    </style>
</head>

<body>

    <!-- for header part -->
    <header>

        <div class="logosec">
            <div class="logo">Matron Dashboard</div>
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
                class="icn menuicn" id="menuicn" alt="menu-icon">
        </div>

        <div class="searchbar">
            <input type="text" placeholder="Search">
            <div class="searchbtn">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                    class="icn srchicn" alt="search-icon">
            </div>
        </div>

        <div class="message">
            <div class="circle"></div>
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png" class="icn" alt="">
            <div class="dp">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
                    class="dpicn" alt="dp">
            </div>
        </div>

    </header>

    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <div class="nav-option option1">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                            class="nav-img" alt="dashboard">
                        <h3> Dashboard</h3>
                    </div>

                    <div class="option2 nav-option">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
                            class="nav-img" alt="articles">
                        <h3> Articles</h3>
                    </div>

                    <div class="nav-option option3">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
                            class="nav-img" alt="report">
                        <h3> Report</h3>
                    </div>

                    <div class="nav-option option4">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png"
                            class="nav-img" alt="institution">
                        <h3> Institution</h3>
                    </div>

                    <div class="nav-option option5">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
                            class="nav-img" alt="blog">
                        <h3> Profile</h3>
                    </div>

                    <div class="nav-option option6">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png"
                            class="nav-img" alt="settings">
                        <h3> Settings</h3>
                    </div>

                    <div class="nav-option logout">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
                            class="nav-img" alt="logout">
                        <h3>Logout</h3>
                    </div>

                </div>
            </nav>
        </div>
        <div class="main">

            <div class="searchbar2">
                <input type="text" name="" id="" placeholder="Search">
                <div class="searchbtn">
                    <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                        class="icn srchicn" alt="search-button">
                </div>
            </div>


            <h1> Attendance </h1>
            <table>
    <tr>
        <th>Name</th>
        <th>Admission No</th>
        <th>Branch</th>
        <th>Semester</th>
        <th>Morning</th>
        <th>Night</th>
        <th>Actions</th>
    </tr>
    <?php
    // Include your connection.php file
    include '../../connection/connection.php';

    // Select data from the attendance table
    $currentDate = date("Y-m-d");
    $query = "SELECT * FROM attendance WHERE date = '$currentDate'";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['admission_no'] . "</td>";
        echo "<td>" . $row['branch'] . "</td>";
        echo "<td>" . $row['semester'] . "</td>";
        
        // Check the 'morning' value
        if ($row['morning'] == 1) {
            // Display "Present" with a green background
            echo "<td style='background-color: green;'>Present</td>";
        } else {
            // Display "Absent" with a red background
            echo "<td style='background-color: red;'>Absent</td>";
        }

        // Check the 'night' value
        if ($row['night'] == 1) {
            echo "<td style='background-color: green;'>Present</td>";
        } else {
            echo "<td style='background-color: red;'>Absent</td>";
        }

        // Add the Verify button
        echo "<td><button onclick='verifyRow(" . $row['id'] . ")'>Verify</button></td>";
        
        echo "</tr>";
    }
    ?>
</table>

        </div>
    </div>
    <script>
    function verifyRow(id) {
        // Send an AJAX request to update the 'morning' and 'night' fields in the database
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'update_attendance.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Update the button and background color
                const button = document.querySelector(`button[data-id="${id}"]`);
                button.textContent = 'Verified';
                button.style.backgroundColor = 'green';
            }
        };
        xhr.send(`id=${id}`);
    }
</script>

    <script src="../../style/dashboard.js"></script>
</body>

</html>