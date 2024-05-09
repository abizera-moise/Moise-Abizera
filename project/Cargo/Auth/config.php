<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "cargo");

if (!$conn) {
    echo "Not connected!";
}

if (!$_SESSION['mid']) {
    header("Location: ./Auth/login.php");
} else {
    // echo $_SESSION['mid'];
    // echo " is set";
}
