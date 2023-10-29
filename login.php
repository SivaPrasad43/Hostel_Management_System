<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f4f4f4;
    }

    .login-container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    .role-toggle {
        display: flex;
        justify-content: center;
    }

    .btn-role.active {
        background-color: #007bff;
        color: #fff;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .toast-msg {
        display: none;
        position: fixed;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #ff0000;
        color: #fff;
        padding: 10px 15px;
        border-radius: 5px;
        text-align: center;
        z-index: 999;
    }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="login-container">
            <h2 id="login-title">Students Login</h2>
            <div class="role-toggle btn-group my-3" data-toggle="buttons">
                <label class="btn btn-role active" id="student-button">
                    <input type="radio" name="role" id="student" value="student" autocomplete="off" checked> Student
                </label>
                <label class="btn btn-role" id="warden-button">
                    <input type="radio" name="role" id="warden" value="warden" autocomplete="off"> Warden
                </label>
                <label class="btn btn-role" id="mess-secretary-button">
                    <input type="radio" name="role" id="ms" value="ms" autocomplete="off"> Mess Secretary
                </label>
                <label class="btn btn-role" id="hostel-secretary-button">
                    <input type="radio" name="role" id="hs" value="hs" autocomplete="off"> Hostel Secretary
                </label>
                <label class="btn btn-role" id="matron-button">
                    <input type="radio" name="role" id="matron" value="matron" autocomplete="off"> Matron
                </label>
            </div>
            <!-- <form class="mt-3" method="post" action="php/login_process.php"> -->
            <form class="mt-3" onsubmit="return handleLogin()">
                <div class="form-group mt-4">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username"
                        required>
                </div>
                <div class="form-group mt-4">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                        required>
                </div>
                <input type="hidden" name="role" id="selectedRole" value="student"> <!-- Default role is student -->
                <button type="submit" class="btn btn-primary btn-block" onclick="setRole()">Login</button>
            </form>
            <div id="toast" class="toast-msg">Login failed. Please check your credentials.</div>
            <p class="mt-3"><a href="php/hoste_student_registration.php">Register here</a></p>
        </div>

    </div>

    <script>
    // Function to show the toast message
    function showToast(message) {
        var toast = document.getElementById('toast');
        toast.innerHTML = message;
        toast.style.display = 'block';
        setTimeout(function() {
            toast.style.display = 'none';
        }, 2000); // Hide the toast after 5 seconds
    }

    <?php
    // Add this PHP code snippet to display the toast on login failure
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $total == 0) {
        echo "showToast('Login failed. Please check your credentials.');";
    }
    ?>
    </script>

    <script>
    function setRole() {
        const activeButton = document.querySelector('.btn-role.active');
        const selectedRole = activeButton.querySelector('input').value;
        document.getElementById('selectedRole').value = selectedRole;
    }

    const roleButtons = document.querySelectorAll('.btn-role');
    const loginTitle = document.getElementById('login-title');

    roleButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            roleButtons.forEach(function(btn) {
                btn.classList.remove('active');
            });
            button.classList.add('active');
            loginTitle.innerHTML = button.innerText + ' Login';
        });
    });
    </script>

<script>
    function handleLogin() {
        // Get form input values
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;
        var role = document.querySelector('.btn-role.active input').value;

        // Perform AJAX request to login_process.php
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'php/login_process.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    // Check the response from login_process.php
                    if (xhr.responseText === 'success') {
                        // Successful login, redirect to the appropriate dashboard
                        switch (role) {
                            case 'student':
                                window.location.href = 'php/dashboard/student_dashboard.php';
                                break;
                            case 'warden':
                                window.location.href = 'php/dashboard/wardenDashboard/warden_dashboard.php';
                                break;
                            case 'ms':
                                window.location.href = 'php/dashboard/mess_secretary_dashboard.php';
                                break;
                            case 'hs':
                                window.location.href = 'php/dashboard/hostel_secretary_dashboard.php';
                                break;
                            case 'matron':
                                window.location.href = 'php/dashboard/matron_dashboard.php';
                                break;
                            default:
                                // Redirect to a default page if the role is not recognized
                                window.location.href = 'default_dashboard.php';
                                break;
                        }
                    } else {
                        // Invalid login, show the toast
                        showToast('Login failed. Please check your credentials.');
                    }
                } else {
                    // Handle other HTTP statuses if needed
                }
            }
        };

        // Send the form data to login_process.php
        var formData = 'username=' + username + '&password=' + password + '&role=' + role;
        xhr.send(formData);

        // Prevent the default form submission
        return false;
    }
</script>


    <!-- Link to Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>

</html>