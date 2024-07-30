<?php
session_start();

if (isset($_SESSION['logged-in'])) {
    header("Location: home.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    include 'db_conn.php';

    // Function to sanitize user inputs
    function sanitizeInput($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    $username = sanitizeInput($_POST['username']);
    $firstname = sanitizeInput($_POST['first_name']);
    $lastname = sanitizeInput($_POST['last_name']);
    $email = sanitizeInput($_POST['email']);
    $password = isset($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : "";

    if (empty($username) || empty($firstname) || empty($lastname) || empty($email) || empty($_POST['password']) || empty($_POST['confirm_password'])) {
        $error_message = "All fields are required.";
    } elseif ($_POST['password'] !== $_POST['confirm_password']) {
        $error_message = "Passwords do not match.";
    } else {
        $query = "INSERT INTO register (username, first_name, last_name, email, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);

        if ($stmt) {
            $stmt->bind_param("sssss", $username, $firstname, $lastname, $email, $password);
            if ($stmt->execute()) {
                $_SESSION["user_id"] = mysqli_insert_id($conn);
                header("Location: login.php");
                exit();
            } else {
                $error_message = "Registration failed. Please try again.";
            }
            $stmt->close();
        } else {
            $error_message = "Failed to prepare SQL statement.";
        }
    }

    if (isset($error_message)) {
        echo "<p class='error'>$error_message</p>";
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Register</title>
   
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: linear-gradient(lightblue, lightpink);
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: auto;
           
        }
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-image: url("download (6).jpg");
            background-size: cover;
            filter: blur(8px);
            -webkit-filter: blur(8px);
        }

        .register-container {
            background-image: linear-gradient(lightgreen, lightblue);
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            width: 400px;
            padding: 20px;
            box-sizing: border-box;
        }

        .register-container h1 {
            text-align: center;
            color: black;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 14px;
            color: black;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 100;

        }

        .form-group input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 16px;
        }

        .form-group input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .form-group input[type="text"],
        .form-group input[type="password"],
        .form-group input[type="email"] {
            height: 40px;
        }

        p {
            text-align: center;
            margin-top: 20px;
            color: #495057;
        }

        p a {
            color: #007bff;
        }

        p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="register-container">
    <h1>Register Here!</h1>
    <h6>Please fill in this form to create an account.</h6>
    <form action="register.php" method="post">
        <div class="form-group">
            <label for="inputuser_name">Username</label>
            <input type="text" class="form-control" id="inputuser_name" name="username" required>
        </div>
        <div class="form-group">
            <label for="inputfirst_name">First Name</label>
            <input type="text" class="form-control" id="inputfirst_name" name="first_name" required>
        </div>
        <div class="form-group">
            <label for="inputlast_name">Last Name</label>
            <input type="text" class="form-control" id="inputlast_name" name="last_name" required>
        </div>
        <div class="form-group">
            <label for="inputemail">Email</label>
            <input type="email" class="form-control" id="inputemail" name="email" required>
        </div>
        <div class="form-group">
            <label for="inputpassword">Password</label>
            <input type="password" class="form-control" id="inputpassword" name="password" required>
        </div>
        <div class="form-group">
            <label for="inputconfirm_password">Confirm Password</label>
            <input type="password" class="form-control" id="inputconfirm_password" name="confirm_password" required>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="register" value="Register">
        </div>
        <p>Already have an account? <a href="login.php">Login here</a>.</p>
    </form>
</div>

</body>
</html>


