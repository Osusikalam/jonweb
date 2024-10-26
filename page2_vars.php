<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Use of Variables</title>
    <link rel="stylesheet" href="phpbody.css">
    <link rel="stylesheet" href="phplink.css">
    <style> 
    .container {
        display: flex;
        width: 85%;
        font-family: Arial, sans-serif;
        opacity: 80%;
        margin: 5%;
        }
    .left-section {
        width: 50%;
        background-color: #fff;
        padding: 20px;
        }
    .right-section {
        width: 50%;
        background-color: #fff;
        padding: 20px;
        }
    h1{
            text-align: center;
        }
    </style>
</head>
<body>

    <nav>
        <div class="nav1 button"><button onclick="window.location.href
            ='project1.php'">Back to Main Menu</button></div>
        </div>
    </nav>
    <h1>The Use of Variables</h1>
    <div class="container">
        <?php
            
            $wholeNumbers = [15, 32, 58, 47, 21];
            $floatingPoints = [12.99, 45.50, 23.75, 67.30, 100.25]; 
            $strings = ["Table", "Chair", "Laptop", "Pen", "Notebook"]; 
            $characters = ['A', 'B', 'C', 'D', 'E']; 
        ?>
        <div class = "left-section">
            <?php
            echo "<h2>Item Quantities:</h2>";
            foreach ($wholeNumbers as $index => $num) {
                echo "The quantity of " . $strings[$index] . " is: $num units<br>";
            }

            echo "<h2>Item Prices:</h2>";
            foreach ($floatingPoints as $index => $price) {
                echo "The price of " . $strings[$index] . " is: $$price<br>";
            }
            ?>
        </div>
        <div class = "right-section">
            <?php
            echo "<h2>Item Descriptions:</h2>";
            foreach ($strings as $index => $item) {
                echo "Item $index: $item<br>";
            }

            echo "<h2>Item Ratings:</h2>";
            foreach ($characters as $index => $rating) {
                echo "The rating of " . $strings[$index] . " is: $rating<br>";
            }
             ?>
        </div>
    </div>

    <footer>
        <p>&copy; Created by Jonjie V. Tribunalo Jr.</p>
        <p>Date Created: October 10, 2024</p>
        <p>All rights reserved.</p>
    </footer>

</body>
</html>
