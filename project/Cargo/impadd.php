<?php


include_once "./Auth/config.php";

$id = $_GET['id'];
$sql = mysqli_query($conn, " SELECT * FROM furniture WHERE fid = '{$id}' ");

if ($sql == true) {
    $fetch = mysqli_fetch_assoc($sql);

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
            </div>
                <button type="submit" name="submit">Import</button>
            </form>';
}

if (isset($_POST['submit'])) {
    $quantity = $_POST['quantity'];
    $date = $_POST['date'];

    $check = mysqli_query($conn, " SELECT * FROM import WHERE fid = '{$id}'  ");
    if (mysqli_num_rows($check) > 0) {
        $fetch = mysqli_fetch_assoc($check);
        $new_quantity = $fetch['impquantity'];
        $date = $_POST['impdate'];

        $sql = mysqli_query($conn, " UPDATE import SET impquantity = '{$new_quantity}',impdate = '{$date}' WHERE fid = '{$id}' ");
        if ($sql == true) {
            // echo "Record Updated! <a href='./import.php'>View Imports</a>  ";
            header("Location:./import.php");
        } else {
            echo "Record not updated";
        }
    } else {
        $sql = mysqli_query($conn, " INSERT INTO import(fid,impdate, impquantity) VALUES('{$id}','{$date}','{$quantity}')  ");
        if ($sql == true) {
            header("Location:./import.php");
            echo " Record Added! <a href='./import.php'>View Imports</a> ";
        } else {
            echo "Not Added!";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Product</title>
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
        <a href="./export1.php">Exports</a>
    </nav>
    <?php echo $form; ?>
    <div class="footer">
        <p>&copy; 2024 Furniture Imports/Exports & Transit Facilities</p>
    </div>

</body>

</html>