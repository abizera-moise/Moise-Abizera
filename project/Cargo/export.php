<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Export</title>
    <style>
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
            margin-top: 30px;
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

        .h h1 {
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

    <?php

    include_once "./Auth/config.php";
    $form = '';
    $sql = mysqli_query($conn, " SELECT * FROM export INNER JOIN furniture ON  export.fid = furniture.fid ");
    if ($sql == true) {
        $num_rows = mysqli_num_rows($sql);
        if ($num_rows > 0) {
            $a = 0;
            while ($fetch = mysqli_fetch_assoc($sql)) {
                $a++;
                $form .= '<tr>
                        <td>' . $a . '</td>
                        <td>' . $fetch['fname'] . '</td>
                        <td>' . $fetch['fowname'] . '</td>
                        <td>' . $fetch['expdate'] . '</td>
                        <td>' . $fetch['expquantity'] . '</td>
                        <td> <a href="expupdate.php?id=' . $fetch['fid'] . '">Update</a></td>
                        <td> <a href="expdelete.php?id=' . $fetch['fid'] . '">Delete</a></td>
                    </tr>';
            }
        } else {
            $form = '<tr> <td> No Record Found! </td> </tr>';
        }
    }
    ?>
    <div class="h">
        <h1>Export</h1>
    </div>
    <table border='1'>
        <thead>
            <tr>
                <th>No</th>
                <th>Furniture Name</th>
                <th>Furniture Owner</th>
                <th>Date</th>
                <th>Quantity</th>
                <th colspan='3'>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php echo $form; ?>
        </tbody>
    </table>


    <div class="footer">
        <p>&copy; 2024 Furniture Imports/Exports & Transit Facilities</p>
    </div>

</body>

</html>