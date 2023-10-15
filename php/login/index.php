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
            max-width: 400px;
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
        .btn-student.active {
            background-color: #007bff; 
            color: #fff; 
        }
        .btn-admin.active {
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
                <label class="btn btn-student active" id="student-button">
                    <input type="radio" name="role" id="student" value="student" autocomplete="off" checked> Student
                </label>
                <label class="btn btn-admin" id="admin-button">
                    <input type="radio" name="role" id="admin" value="admin" autocomplete="off"> Administrator
                </label>
            </div>
            <form class="mt-3">
                <div class="form-group mt-4">
                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                </div>
                <div class="form-group mt-4">
                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
    </div>

    <script>
        const studentButton = document.getElementById('student-button');
        const adminButton = document.getElementById('admin-button');
        const loginTitle = document.getElementById('login-title');

        studentButton.addEventListener('click', function() {
            studentButton.classList.add('active');
            adminButton.classList.remove('active');
            loginTitle.innerHTML = 'Students Login'
        });

        adminButton.addEventListener('click', function() {
            adminButton.classList.add('active');
            studentButton.classList.remove('active');
            loginTitle.innerHTML = 'Admin Login'
        });
    </script>

    <!-- Link to Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
