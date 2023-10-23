<?php
session_start(); // Start the session

    $username = $_SESSION['username'];
    $role = $_SESSION['role'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, 
				initial-scale=1.0">
    <title>RIT Hostel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/dash-style.css">
    <link rel="stylesheet" href="../../style/responsive.css">
</head>

<body>

    <!-- for header part -->
    <header>

        <div class="logosec">
            <div class="logo">Student Dashboard</div>
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
                    <div class="nav-option active">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                            class="nav-img" alt="dashboard">
                        <h3> Dashboard</h3>
                    </div>
                    <div class="navbar-bottom">
                        <div class="nav-option option6">
                            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png"
                                class="nav-img" alt="settings">
                            <h3> Settings</h3>
                        </div>

                        <a href="../logout.php">
                            <!-- Replace "logout.php" with the actual URL of your PHP logout script -->
                            <div class="nav-option logout">
                                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
                                    class="nav-img" alt="logout">
                                <h3>Logout</h3>
                            </div>
                        </a>

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

            <div class="dashboard-items-container">
                <div class="food-card">
                    <h2 class="food-title">Today's Menu</h2>
                    <div class="food-details">
                        <div class="food-item">
                            <div class="food-title">
                                <i class="fas fa-utensils food-icon"></i>
                                <span class="food-label">Breakfast:</span>
                            </div>
                            <div class="food-name">Uppumavu</div>
                            <button class="btn btn-small btn-outline-primary btn-rounded mt-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                Give Feedback
                            </button>
                            <div class="food-time">8:00 AM - 10:00 AM</div>
                        </div>
                        <div class="food-item">
                            <div class="food-title">
                                <i class="fas fa-utensils food-icon"></i>
                                <span class="food-label">Breakfast:</span>
                            </div>
                            <div class="food-name">Uppumavu</div>
                            <button class="btn btn-small btn-outline-primary btn-rounded mt-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                Give Feedback
                            </button>
                            <div class="food-time">8:00 AM - 10:00 AM</div>
                        </div>
                        <div class="food-item">
                            <div class="food-title">
                                <i class="fas fa-utensils food-icon"></i>
                                <span class="food-label">Breakfast:</span>
                            </div>
                            <div class="food-name">Uppumavu</div>
                            <button class="btn btn-small btn-outline-primary btn-rounded mt-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                Give Feedback
                            </button>
                            <div class="food-time">8:00 AM - 10:00 AM</div>
                        </div>
                        <div class="food-item">
                            <div class="food-title">
                                <i class="fas fa-utensils food-icon"></i>
                                <span class="food-label">Breakfast:</span>
                            </div>
                            <div class="food-name">Uppumavu</div>
                            <button class="btn btn-small btn-outline-primary btn-rounded mt-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                Give Feedback
                            </button>
                            <div class="food-time">8:00 AM - 10:00 AM</div>
                        </div>
                    </div>
                </div>
                <div>

                    <!-- Attendence -->
                    <div class="attendance-section">
                        <h2 class="attendance-title">Mark Attendance</h2>
                        <div class="attendance-box">
                            <div class="time-show">
                                <p>Morning Attendance</p>
                                <h1>8:00 AM - 9:30 AM</h1>
                            </div>
                            <div class="mark-attendance">
                                <form id="attendance-form" action="../process_attendance.php" method="post">
                                    <input type="hidden" name="attendance_type" value="morning">
                                    <button id="morning-attendance-btn" type="submit" class="attendance-btn">Mark
                                        Morning Attendance</button>
                                </form>
                                <p id="attendance-message" style="display: none;">Mark attendance between 8:00 AM and
                                    9:30 AM.</p>
                            </div>
                        </div>
                        <div class="attendance-buttons">
                            <form id="night-attendance-form" action="../process_attendance.php" method="post">
                                <input type="hidden" name="attendance_type" value="night">
                                <button id="night-attendance-btn" type="submit" class="attendance-button"
                                    style="display: none;">Mark Night Attendance</button>
                            </form>
                        </div>
                    </div>

                    <script>
                    // Get the current date and time
                    var now = new Date();
                    var hours = now.getHours();
                    var minutes = now.getMinutes();

                    // Check if the current time is within the allowed time intervals
                    if ((hours == 8 && minutes >= 0 && minutes <` 60) || (hours == 11 && minutes <= 1)) {
                        // Show the "attendance-section" div and the "Morning" button
                        document.querySelector(".attendance-section").style.display = "block";
                        document.getElementById("morning-attendance-btn").style.display = "block";
                        document.getElementById("night-attendance-btn").style.display =
                        "none"; // Hide the "Night" button
                    } else if (hours == 21 && minutes >= 0 && minutes < 30) {
                        // Show the "attendance-section" div and the "Night" button
                        document.querySelector(".attendance-section").style.display = "block";
                        document.getElementById("night-attendance-btn").style.display = "block";
                        document.getElementById("morning-attendance-btn").style.display =
                        "none"; // Hide the "Morning" button

                        // Calculate the time until 10:30 PM
                        var endTime = new Date();
                        endTime.setHours(22);
                        endTime.setMinutes(30);
                        var timeRemaining = endTime - now;

                        // Schedule a page refresh when the end time is reached
                        setTimeout(function() {
                            window.location.reload(true); // Hard refresh the page
                        }, timeRemaining);
                    } else {
                        // Hide the "attendance-section" div
                        document.querySelector(".attendance-section").style.display = "none";
                    }
                    </script>




                    <!-- Complaint Box -->

                    <div class="complaint-section">
                        <h2 class="complaint-title">Complaint Box</h2>
                        <form id="complaint-form" action="../process_complaint.php" method="post">
                            <label for="title" class="input-title">Topic</label>
                            <input class="complaint-input" type="text" name="topic" placeholder="Enter Topic" required>
                            <label for="description">Describe</label>
                            <textarea class="complaint-textarea" name="content" placeholder="Enter your complaint"
                                required></textarea>
                            <button type="submit" class="inform-button">Inform Warden</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Food Feedback</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="complaint-form" action="../process_complaint.php" method="post">
                        <label for="description">Describe</label>
                        <textarea class="complaint-textarea" name="content" placeholder="Enter your Feedback"
                            required></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send Feedback</button>
                </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="../../style/dashboard.js"></script>
</body>

</html>