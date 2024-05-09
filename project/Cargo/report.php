<?php

include_once "./Auth/config.php";

$sql = mysqli_query($conn, " SELECT *, import.impquantity AS impquantity, 
                                       export.expquantity AS expquantity, 
                                       export.expdate AS expdate, 
                                       import.impdate AS impdate FROM furniture
                                      INNER JOIN import ON furniture.fid = import.fid
                                      INNER JOIN export ON furniture.fid = export.fid ");
$form = '';

if ($sql == true) {

    $num_rows = mysqli_num_rows($sql);
    if ($num_rows > 0) {
        $a = 0;
        while ($fetch = mysqli_fetch_assoc($sql)) {
            $a++;
            $form .= ' <tr>
                        <td>' . $a . '</td>
                        <td>' . $fetch['fname'] . '</td>
                        <td>' . $fetch['fowname'] . '</td>
                        <td>' . $fetch['impquantity'] . '</td>
                        <td>' . $fetch['expquantity'] . '</td>
                        <td>' . $fetch['expdate'] . '</td>
                        <td>' . $fetch['impdate'] . '</td>
                    </tr>';
        }
    } else {
        $tbody = '<tr> <td> No record! </td> </tr>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
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
            margin-top: 10px;
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
            border-collapse: collapse;
        }

        table {
            width: 100%;
            margin-top: 1px;
            margin-bottom: 30px;
        }



        .l h1 {
            margin-left: 500px;
            font-size: 24px;
        }



        .print {
            background: #ddd;
            margin-left: 600px;
            padding: 10px;
            margin-bottom: 20px;
            width: 5vw;
            text-decoration: none;
            border: 0;
            border-radius: 5px;
        }

        .print:hover {
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

    <div class="l">
        <H1>Cargo Ltd Report</H1>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Furniture Name</th>
                <th>Furniture Owner</th>
                <th>Import Quantity</th>
                <th>Export Quantity</th>
                <th>Export Date</th>
                <th>Import Date</th>
            </tr>
        </thead>
        <tbody>
            <?php echo $form; ?>
            <tr>
                <td>Total: </td>
                <td colspan="8"> <?php echo $num_rows; ?></td>
            </tr>
        </tbody>
    </table>

    <button class="print" onclick="print()">Print</button>

    <div class="footer">
        <p>&copy; 2024 Furniture Imports/Exports & Transit Facilities</p>
    </div>

</body>

</html>