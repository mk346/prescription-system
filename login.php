<?php
require 'config/config.php';
require 'includes/login_handler.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        /* Container styling */
        .login-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        /* Input styling */
        .login-container label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }

        .login-container .login-input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: none;
            border-bottom: 2px solid #ccc;
            outline: none;
            transition: border-bottom-color 0.3s ease-in-out;
        }

        /* Change border color on input focus */
        .login-container .login-input:focus {
            border-bottom-color: #28023a;
        }

        /* Remember me checkbox styling */
        .remember-me {
            display: flex;
            align-items: right;
            justify-content: center;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .remember-me .login-input {
            margin-right: 0px;
        }

        /* Forgot password link styling */
        .forgot-password {
            margin-bottom: 15px;
            display: block;
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        .forgot-password:hover {
            color: #0056b3;
        }

        /* Register link styling */
        .register-link {
            color: #28a745;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        .register-link:hover {
            color: #218838;
        }

        /* Login button styling */
        .login-btn {
            background-color: #520377;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .login-btn:hover {
            background-color: #1a0127;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <!-- Username input -->
            <label for="username">Username:</label>
            <input type="email" id="username" class="login-input" name="email" placeholder="Enter your Email" required>

            <!-- Password input -->
            <label for="password">Password:</label>
            <input type="password" id="password" class="login-input" name="password" placeholder="Enter your password" required>
            <!-- Login button -->
            <input type="submit" name="login_btn" class="login-btn" value="Login">
            <br>
            <?php 
                if (in_array("<span style='color: red;'>Email or Password was Incorrect</span><br>", $error_array)) echo "<span style='color: red;'>Email or Password was Incorrect</span><br>";
            ?>
            <!-- <button type="submit" class="login-btn">Login</button> -->
            <!-- Forgot password link -->
            <div class="Remember">
                <label><input type="checkbox">Remember me</label>
                <a href="#" class="forgot-password">Forgot password? Click here</a>
            </div>
        </form>

        <!-- Register link -->
        <p>Not registered? <a href="register.php" class="register-link">Register here</a></p>
    </div>
</body>
</html>