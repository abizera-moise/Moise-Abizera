<?php

include_once "./Auth/config.php";

if (!isset($_GET['id'])) {
    header("Location: ./Auth/login.php");
}
$id = $_GET['id'];

$sql = mysqli_query($conn, "SELECT *  FROM furniture WHERE fid = '{$id}' ");
if ($sql == true) {
    $fetch = mysqli_fetch_assoc($sql);
    $form = '<form action="" method="POST">
                    <div>
                        <label for="uname">Furniture Name</label>
                        <input type="text" name="pname" value="' . $fetch['fname'] . '" >
                    </div>
                    <div>
                        <label for="pass">Furniture Owner</label>
                        <input type="text" name="powner" value="' . $fetch['fowname'] . '" >
                    </div>
                    <button type="submit" name="submit">Update</button>
                </form>';
}

if (isset($_POST['submit'])) {
    $pname = $_POST['pname'];
    $powner = $_POST['powner'];

    $sql = mysqli_query($conn, " UPDATE furniture SET fname = '{$pname}', fowname = '{$powner}' WHERE fid = '{$id}' ");

    if ($sql == true) {
        header("location:./furniture.php");
    } else {
        echo "Not updated";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./Capture.JPG" type="image/x-icon">
    <title>UPDATE</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        header {
            background-color: #007bff;
            color: #fff;
            padding: 1px;
            text-align: center;
        }

        nav {
            background-color: #f1f1f1;
            padding: 10px;
            text-align: center;
        }

        nav a {
            text-decoration: none;
            color: #007bff;
            padding: 10px;
        }

        nav a:hover {
            background-color: #007bff;
            color: #fff;
        }

        .section {
            margin-bottom: 40px;
        }

        .section-header {
            font-size: 24px;
            color: #007bff;
            margin-bottom: 10px;
        }

        .item {
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .item h3 {
            margin-top: 0;
            margin-bottom: 10px;
            color: #007bff;
        }

        .item p {
            margin: 0;
        }

        .footer {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        /* Specific styles for transit section */
        .transit {
            background-color: #f1f1f1;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 40px;
        }

        .transit h2 {
            margin-top: 0;
            margin-bottom: 20px;
            color: #007bff;
        }
    </style>
</head>

<body>
    <header>
        <h1>Furniture Imports/Exports & Transit Facilities</h1>
    </header>

    <nav>
        <a href="./furniture.php">Furniture</a>
        <a href="./import.php">Imports</a>
        <a href="./export1.php">Exports</a>
    </nav>

    <?php echo $form; ?>
    <div class="footer">
        <p>&copy; 2024 Furniture Imports/Exports & Transit Facilities</p>
    </div>

</body>

</html>