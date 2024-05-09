<?php

include "./Auth/config.php";
$fid = $_SESSION['mid'];



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
            color: whitesmoke;
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
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .item {
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .item img {
            width: 10vw;
        }

        .item h3 {
            margin-top: 0;
            margin-bottom: 10px;
            color: #007bff;
        }

        .item p {
            margin: 0;
        }

        .item .word {
            margin-left: 0px;
            margin-bottom: 10px;
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
        <a href="./export.php">Exports</a>
        <a href="#transit">Transit Facilities</a>
        <a href="./report.php">Report</a>
        <a href="./Auth/logout.php">Logout</a>
    </nav>

    <div class="container">
        <section id="imports" class="section">
            <div class="section-header">Imports</div>
            <div class="item">
                <h3>Imported Tables</h3>
                <img src="./table/img.jpg" alt="">
                <img src="./table/th (1).jfif" alt="">
                <img src="./table/th (3).jfif" alt="">
                <div class="word">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique a, quis ipsam accusamus laudantium eius, commodi earum doloremque sapiente labore delectus itaque id assumenda molestias iste inventore? Tempore, hic expedita!
                </div>
                <p>Quantity: 50</p>
            </div>
            <div class="item">
                <h3>Imported Chairs</h3>

                <img src="./chair/OIF.jfif" alt="">
                <img src="./chair/OIP (1).jfif" alt="">
                <img src="./chair/th (6).jfif" alt="">
                <div class="word">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique a, quis ipsam accusamus laudantium eius, commodi earum doloremque sapiente labore delectus itaque id assumenda molestias iste inventore? Tempore, hic expedita!
                </div>
                <p>Quantity: 100</p>
            </div>
            <div class="item">
                <h3>Imported Beds</h3>
                <img src="./bed/download (2).jfif" alt="">
                <img src="./bed/OIP (3).jfif" alt="">
                <img src="./bed/OIP (6).jfif" alt="">
                <div class="word">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique a, quis ipsam accusamus laudantium eius, commodi earum doloremque sapiente labore delectus itaque id assumenda molestias iste inventore? Tempore, hic expedita!
                </div>
                <p>Quantity: 30</p>
            </div>
            <div class="item">
                <h3>Imported Dressers</h3>
                <img src="./dress/th (10).jfif" alt="">
                <img src="./dress/th (11).jfif" alt="">
                <div class="word">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique a, quis ipsam accusamus laudantium eius, commodi earum doloremque sapiente labore delectus itaque id assumenda molestias iste inventore? Tempore, hic expedita!
                </div>
                <p>Quantity: 20</p>
            </div>
        </section>

        <section id="exports" class="section">
            <div class="section-header">Exports</div>
            <div class="item">
                <h3>Exported Tables</h3>
                <img src="./table/th (4).jfif" alt="">
                <img src="./table/th.jfif" alt="">
                <div class="word">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique a, quis ipsam accusamus laudantium eius, commodi earum doloremque sapiente labore delectus itaque id assumenda molestias iste inventore? Tempore, hic expedita!
                </div>
                <p>Quantity: 40</p>
            </div>
            <div class="item">
                <h3>Exported Chairs</h3>
                <img src="./chair/OIP (1).jfif" alt="">
                <img src="./chair/th (6).jfif" alt="">
                <div class="word">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique a, quis ipsam accusamus laudantium eius, commodi earum doloremque sapiente labore delectus itaque id assumenda molestias iste inventore? Tempore, hic expedita!
                </div>
                <p>Quantity: 80</p>
            </div>
            <div class="item">
                <h3>Exported Beds</h3>
                <img src="./bed/OIP (5).jfif" alt="">
                <img src="./bed/OIP (4).jfif" alt="">
                <div class="word">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique a, quis ipsam accusamus laudantium eius, commodi earum doloremque sapiente labore delectus itaque id assumenda molestias iste inventore? Tempore, hic expedita!
                </div>
                <p>Quantity: 20</p>
            </div>
            <div class="item">
                <h3>Exported Dressers</h3>
                <img src="./dress/th (9).jfif" alt="">
                <img src="./dress/th (8).jfif" alt="">
                <div class="word">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique a, quis ipsam accusamus laudantium eius, commodi earum doloremque sapiente labore delectus itaque id assumenda molestias iste inventore? Tempore, hic expedita!
                </div>
                <p>Quantity: 15</p>
            </div>
        </section>

        <section id="transit" class="transit">
            <h2>Transit Facilities</h2>
            <p>We provide transit facilities for all cargo passing through Rwanda to neighboring countries.</p>
        </section>
    </div>

    <div class="footer">
        <p>&copy; 2024 Furniture Imports/Exports & Transit Facilities</p>
    </div>

</body>

</html>