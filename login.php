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
            <form class="mt-3" method="post" action="php/login_process.php">
                <div class="form-group mt-4">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                </div>
                <div class="form-group mt-4">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                </div>
                <input type="hidden" name="role" id="selectedRole" value="student"> <!-- Default role is student -->
                <button type="submit" class="btn btn-primary btn-block" onclick="setRole()">Login</button>
            </form>
        </div>
    </div>

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

    <!-- Link to Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
