<?php

session_start();
if (isset($_SESSION['mid'])) {
    header("Location: ../index.php");
}

$conn = mysqli_connect("localhost", "root", "", "cargo");
if (!$conn) {
    echo " not connected";
} else {



    if (isset($_POST['create'])) {
        // $names = $_POST['names'];
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];

        $check = mysqli_query($conn, "SELECT * FROM manager where username = '{$uname}' ");
        if (mysqli_num_rows($check) > 0) {
            echo "<script>alert('Username already exist!')</script>";
        } else {
            $insert = mysqli_query($conn, " INSERT INTO manager(username, password) VALUES('{$uname}','{$pass}')");
            if ($insert) {
                $select =  mysqli_query($conn, "SELECT * FROM manager WHERE username='{$uname}' AND password='{$pass}' ");
                if ($select) {
                    $fetch = mysqli_fetch_assoc($select)['mid'];
                    $_SESSION['mid'] = $fetch;
                    header("Location: ../index.php");
                }
            }
        }
    } else {
        echo "";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
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
            padding: 10px;
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
    </style>
</head>

<body>
    <div class="l"></div>
    <div class="login-container">
        <h2>Signup</h2>
        <form action="" method="POST">
            <div class="input-group">
                <input type="text" name="name" placeholder="Name" required>
            </div>
            <div class="input-group">
                <input type="text" name="uname" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="password" name="pass" placeholder="Password" required>
            </div>
            <button type="submit" name="create" class="btn">Create</button>
        </form>
    </div>

</body>

</html>