<?php
session_start(); 
include 'db_conn.php';

if(isset($_SESSION['logged-in'])){
    $msg = "Access denied!";
    header("Location: home.php?msg=$msg");
    exit(); // Stop further execution
}

if (isset($_POST['login'])) {
    $email = trim($_POST['username']); // Trim input to remove whitespace
    $pass = $_POST['password'];

    // Prepare and execute SQL query
    $getData = $conn->prepare("SELECT `id`, `password` FROM `register` WHERE `email` = ?");
    $getData->bind_param("s", $email);
    $getData->execute();
    $result = $getData->get_result();

    // Check if user exists and password matches
    if ($result->num_rows == 1) {
        $data = $result->fetch_assoc();
        if (password_verify($pass, $data['password'])) {
            $_SESSION['logged-in'] = true;
            $_SESSION['userID'] = $data['id']; // Assuming the column name is 'id'
            $msg = "User successfully logged-in!";
            header("Location: home.php?msg=$msg");
            exit(); // Stop further execution
        }
    }

    // If no matching user found or password doesn't match
    $msg = "Email or Password do not match!";
    header("Location: login.php?msg=$msg");
    exit(); // Stop further execution
}

// If login form was not submitted, render the login page
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login Form</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-image: url("gallery-final.jpg");
        background-size: cover;
    }

        body::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        background-image: url("gallery-final.jpg");
        background-size: cover;
        filter: blur(8px);
        -webkit-filter: blur(8px);
    }

    .login-container {
        
        border-radius: 8px;
        overflow: hidden;
        width: 500px;
        padding: 20px;
        box-sizing: border-box;
    }

        .login-container h2 {
            text-align: center;
            color: white;
            font-size: 40px;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            color: white;
            font-size: 15px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 14px;
            color: #000;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 100;
            color: white;
            font-size: 20px;

        }

        .form-group input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .form-group input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            height: 40px;
        }
        .pass{
            font-size: 18px;
        }
        .done{
            color: white;
            font-size: 20px;
        }
    </style>
</head>
<body>

<div class="login-container">
<h2>Login Here!</h2>
<form class="login-form" action="login.php" method="post">
        <div class="form-group">
            <label for="username">Email</label>
            <input type="text" id="username" name="username" required>

        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

        </div>
        <div class="form-group">
        <input type="submit" name="login" value="Login">
        </div>
        
    </form>
    <p class="done">Don't have an account? <a href="register.php">Register here</a>.</p>
</div>

</body>
</html>

