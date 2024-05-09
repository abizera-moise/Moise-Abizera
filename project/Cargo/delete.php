<?php


include_once "./Auth/config.php";

if (!isset($_GET['id'])) {
    header("Location: ./index.php");
}

$id = $_GET['id'];
$sql = mysqli_query($conn, " DELETE FROM furniture WHERE fid = '{$id}' ");

if ($sql == true) {
    header("Location: ./furniture.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete | Page</title>
</head>

<body>

</body>

</html>