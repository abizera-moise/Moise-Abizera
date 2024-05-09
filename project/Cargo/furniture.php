<?php

include "./Auth/config.php";

$sql = mysqli_query($conn, " SELECT * FROM furniture ");
$tbody = '';



if ($sql == true) {
    $num_rows = mysqli_num_rows($sql);

    if ($num_rows > 0) {
        $a = 0;
        while ($fetch = mysqli_fetch_assoc($sql)) {
            $a++;
            $tbody .= '
                        <tr>
                                <td>' . $a . '</td>
                                <td>' . $fetch['fname'] . '</td>
                                <td>' . $fetch['fowname'] . '</td>
                                <td><a href="./update.php?id=' . $fetch['fid'] . '">Update</a></td>
                                <td><a href="./delete.php?id=' . $fetch['fid'] . '">Delete</a></td>
                                <td><a href="./impadd.php?id=' . $fetch['fid'] . '">Import</a></td>
                            </tr>
                        ';
        }
    } else {
        $tbody .= '<tr> <td colspan="5"> No Records found! </td> </tr>';
    }
} else {
    echo "Not selected";
}

?>
<!-- html codes -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f2f2f2;
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

        h2 {
            margin-left: 600px;
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

    <h2>Furniture List</h2>

    <table border="2" style="border-collapse: collapse;">
        <thead>
            <tr>
                <th>No</th>
                <th>Furniture Name</th>
                <th>Furniture Owner</th>
                <th colspan="4">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php echo $tbody; ?>
            <tr>
                <td>Total: </td>
                <td colspan="6"> <?php echo $num_rows; ?> </td>
            </tr>
        </tbody>
    </table>
    <a href="./add.php" class="add">Add</a>

    <div class="footer">
        <p>&copy; 2024 Furniture Imports/Exports & Transit Facilities</p>
    </div>

</body>

</html>