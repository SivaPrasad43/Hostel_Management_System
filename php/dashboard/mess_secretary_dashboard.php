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
    form {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #333;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #007BFF;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    /* Add media queries for responsiveness if needed */

    @media (max-width: 600px) {
        form {
            padding: 10px;
        }
    }

    .container {
        display: flex;
    }

    .left {
        flex: 1;
        /* Left side takes 1/2 of the space */
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .right {
        flex: 1;
        /* Right side takes 1/2 of the space */
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

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

    .box-container {
        display: flex;
        justify-content: space-between;
    }

    .attendance-container {
        display: flex;
        flex-direction: column;
    }

    .attendance-box {
        background-color: #f2f2f2;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 5px;
        margin: 10px;
        text-align: center;
    }

    .morning-attendance {
        flex: 1;
    }

    .night-attendance {
        flex: 1;
    }
    </style>

    <!-- ... your existing HTML code ... -->

    </style>
</head>

<body>

    <!-- for header part -->
    <header>

        <div class="logosec">
            <div class="logo">Mess secretary Dashboard</div>
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

                    <a href="registered_students.php" class="option2 nav-option">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
                            class="nav-img" alt="articles">
                        <h3> Registered Students</h3>
                    </a>

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

            <div class="box-container">


            </div>
            <form action="../process_food_menu.php" method="post">
                <?php
    // Include your connection.php file
    include '../../connection/connection.php';

    // Check if a menu_id is provided, and retrieve data from the database

        $query = "SELECT * FROM food_menu WHERE menu_id = 1";
        $result = mysqli_query($conn, $query);

        if ($row = mysqli_fetch_assoc($result)) {
            $breakfast_item = $row['breakfast_item'];
            $lunch_item = $row['lunch_item'];
            $evening_item = $row['evening_item'];
            $dinner_item = $row['dinner_item'];
        }
    ?>

                <input type="hidden" name="menu_id" value="<?php echo $menu_id; ?>">

                <label for="breakfast_item">Breakfast Item:</label>
                <input type="text" name="breakfast_item" id="breakfast_item" value="<?php echo $breakfast_item; ?>"
                    required><br><br>

                <label for="lunch_item">Lunch Item:</label>
                <input type="text" name="lunch_item" id="lunch_item" value="<?php echo $lunch_item; ?>"
                    required><br><br>

                <label for="evening_item">Evening Item:</label>
                <input type="text" name="evening_item" id="evening_item" value="<?php echo $evening_item; ?>"
                    required><br><br>

                <label for="dinner_item">Dinner Item:</label>
                <input type="text" name="dinner_item" id="dinner_item" value="<?php echo $dinner_item; ?>"
                    required><br><br>

                <input type="submit" value="Add/Update">

            </form>
            <div class="box-container">
                <div class="attendance-container">
                    <div class="attendance-box morning-attendance">
                        <h3>Morning Attendance Total : </h3>
                        <?php
            // Include your connection.php file
            include '../../connection/connection.php';

            // Count the number of attendees in the morning
            $morningQuery = "SELECT COUNT(*) as morning_count FROM attendance WHERE morning = 1";
            $morningResult = mysqli_query($conn, $morningQuery);
            $morningData = mysqli_fetch_assoc($morningResult);
            $morningCount = $morningData['morning_count'];

            echo "<p> $morningCount</p>";
            ?>
                    </div>
                    <div class="attendance-box night-attendance">
                        <h3>Night Attendance Total : </h3>
                        <?php
            // Count the number of attendees at night
            $nightQuery = "SELECT COUNT(*) as night_count FROM attendance WHERE night = 1";
            $nightResult = mysqli_query($conn, $nightQuery);
            $nightData = mysqli_fetch_assoc($nightResult);
            $nightCount = $nightData['night_count'];

            echo "<p> $nightCount</p>";
            ?>
                    </div>
                </div>
            </div>

            <table>
                <tr>
                    <th>Name</th>
                    <th>Admission No</th>
                    <th>Branch</th>
                    <th>Semester</th>
                    <th>Morning</th>
                    <th>Night</th>
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
            
            // Check the 'night' value (you can do the same for 'night' as for 'morning')
            if ($row['night'] == 1) {
                echo "<td style='background-color: green;'>Present</td>";
            } else {
                echo "<td style='background-color: red;'>Absent</td>";
            }
            
            echo "</tr>";
        }
        ?>

            </table>


        </div>
    </div>

    <script src="../../style/dashboard.js"></script>
</body>

</html>