<?php



include './Auth/config.php';

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $fun = $_POST['fname'];


    $query = "INSERT INTO furniture(fname, fowname) VALUES('{$name}','{$fun}') ";
    $add = mysqli_query($conn, $query);

    if ($add) {
        header("location:./furniture.php");
    } else {
        echo "Error to add furniture!";
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Imports/Exports & Transit Facilities</title>
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
        <a href="./furniture.php">Home</a>
        <a href="./furniture.php">Furniture</a>
        <a href="#imports">Imports</a>
        <a href="./export1.php">Exports</a>
        </nav>

    <div class="container">

        <section id="exports" class="section">
            <div class="item">
                <form action="" method="POST">
                    <div class="">
                        <label for="">Furniture Name</label>
                        <input type="text" name="name">
                    </div>
                    <div class="">
                        <label for="">Furniture Owner Name</label>
                        <input type="text" name="fname">
                    </div>

                    <button type="submit" name="add">Add</button>


                </form>
            </div>
        </section>

        </section>
    </div>

    <div class="footer">
        <p>&copy; 2024 Furniture Imports/Exports & Transit Facilities</p>
    </div>

</body>

</html>