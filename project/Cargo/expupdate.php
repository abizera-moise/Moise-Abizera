<?php


include_once "./Auth/config.php";

if (!isset($_GET['id'])) {
    header("Location: index.php");
}

$id = $_GET['id'];
$select = mysqlI_query($conn, "SELECT * FROM furniture WHERE fid = '{$id}' ");

if ($select == true) {
    $fetch = mysqli_fetch_assoc($select);
    $form = '<form action="" method="POST">
    <div>
        <label for="uname">Product Name</label>
        <input type="text" name="pname" value="' . $fetch['fname'] . '" disabled >
    </div>
    <div>
        <label for="pass">Product Owner</label>
        <input type="text" name="powner" value="' . $fetch['fowname'] . '" disabled >
    </div>
    <div>
        <label for="pass">Quantity</label>
        <input type="text" name="quantity" >
    </div>

    <label for="pass">Date</label>
    <input type="date" name="date" >
</div></br>
    <button type="submit" name="update"  style="margin-top:10px">Update</button>
</form>';
} else {
    echo "Not selected!";
    $form = '';
}

#part two
if (isset($_POST['update'])) {
    $newquantity = $_POST['quantity'];
    $newdate = $_POST['date'];

    $update = mysqli_query($conn, "UPDATE export SET expquantity= '{$newquantity}', expdate = '{$newdate}' WHERE fid = '{$id}' ");
    if ($update == true) {
        header("Location:export.php");
    } else {
        echo "Not updated!";
    }
}





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            margin-top: 30px;
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

        table,
        tr,
        td,
        th {
            border: 2px solid #ddd;
        }

        table {
            margin-left: 350px;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .add {
            background: #ddd;
            margin-left: 600px;
            padding: 10px;
            margin-bottom: 20px;
            text-decoration: none;
        }

        .add:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>

<body>

    <header>
        <h1>Furniture Imports/Exports & Transit Facilities</h1>
    </header>

    <nav>
        <a href="./index.php">Home</a>
        <a href="./furniture.php">Furniture</a>
        <a href="./import.php">Imports</a>
        <a href="./export.php">Exports</a>
        
    </nav>

    <?php echo $form; ?>
    <div class="footer">
        <p>&copy; 2024 Furniture Imports/Exports & Transit Facilities</p>
    </div>

</body>

</html>