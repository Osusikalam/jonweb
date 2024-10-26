<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selection Statements</title>
    <link rel="stylesheet" href="phpbody.css">
    <link rel="stylesheet" href="phplink.css">
</head>
<body>
    <nav>
    <div class="nav1 button"><button onclick="window.location.href
        ='project1.php'">Back to Main Menu</button></div>
    </nav>
    <div class="box">
        <h1>Selection Statements</h1>
        <?php
            $strings = ["Banana", "Apple", "Orange", "Grape", "Peach"];
            $numbers = [10, 25, 15, 5, 20];

            // Sort strings in ascending and descending order manually
            for ($i = 0; $i < count($strings); $i++) {
                for ($j = $i + 1; $j < count($strings); $j++) {
                    if ($strings[$i] > $strings[$j]) {
                        $temp = $strings[$i];
                        $strings[$i] = $strings[$j];
                        $strings[$j] = $temp;
                    }
                }
            }

            echo "<h2>Strings in Ascending Order:</h2>";
            foreach ($strings as $str) {
                echo "$str<br>";
            }

            echo "<h2>Strings in Descending Order:</h2>";
            for ($i = count($strings) - 1; $i >= 0; $i--) {
                echo $strings[$i] . "<br>";
            }

            // Check divisibility and compute sum, product, and average if divisible
            if ($numbers[0] % $numbers[4] == 0) {
                // Calculate sum manually
                $sum = 0;
                foreach ($numbers as $num) {
                    $sum += $num;
                }

                // Calculate product manually
                $product = 1;
                foreach ($numbers as $num) {
                    $product *= $num;
                }

                // Calculate average
                $average = $sum / count($numbers);

                echo "<h2>Sum: $sum</h2>";
                echo "<h2>Product: $product</h2>";
                echo "<h2>Average: $average</h2>";
            } else {
                // Sort numbers in ascending order manually
                for ($i = 0; $i < count($numbers); $i++) {
                    for ($j = $i + 1; $j < count($numbers); $j++) {
                        if ($numbers[$i] > $numbers[$j]) {
                            $temp = $numbers[$i];
                            $numbers[$i] = $numbers[$j];
                            $numbers[$j] = $temp;
                        }
                    }
                }

                echo "<h2>Numbers in Ascending Order:</h2>";
                foreach ($numbers as $num) {
                    echo "$num<br>";
                }
            }
        ?>

    </div>

    <footer>
        <p>&copy; Created by Jonjie V. Tribunalo Jr.</p>
        <p>Date Created: October 10, 2024</p>
        <p>All rights reserved.</p>
    </footer>
</body>
</html>
