<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "cargo");

if (isset($_SESSION['mid'])) {
    header("Location: ../index.php");
}
// echo mysqli_num_rows();

if (isset($_POST['login'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $login = mysqli_query($conn, "SELECT * FROM manager WHERE username = '{$uname}' AND password = '{$pass}' ");
    if (mysqli_num_rows($login) == 1) {
        $fetch = mysqli_fetch_assoc($login)['mid'];
        $_SESSION['mid'] = $fetch;
        header("Location: ../index.php");
    } else {
        echo "<script>alert('Username or password is incorrect!')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
        }

        .l {
            height: 30vh;
        }

        .login-container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group input {
            width: 90%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .login-container p {
            margin-left: 250px;
        }
    </style>
</head>

<body>
    <div class="l"></div>

    <div class="login-container">
        <h2>Login</h2>
        <form action="" method="POST">
            <div class="input-group">
                <input type="text" name="uname" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="password" name="pass" placeholder="Password" required>
            </div>
            <p><a href="../Auth/signup.php">Signup</a></p>
            <button type="submit" name="login" class="btn">Login</button>
        </form>
    </div>

</body>

</html>

<