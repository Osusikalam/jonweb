<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Math Functions</title>
    <link rel="stylesheet" href="phpbody.css">
    <link rel="stylesheet" href="phplink.css">
    <style> 
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

    <div class="box">
        <h1>Using Math Functions</h1>

        <?php
        $floatNums = [3.14, 2.718, 1.618, 0.577, 1.414];
        $wholeNums = [12, 25, 37, 48, 50];

        echo "<h2>Math Functions on Floating Point Numbers:</h2>";
        echo "Ceil of {$floatNums[0]}: " . ceil($floatNums[0]) . "<br>";  
        echo "Floor of {$floatNums[1]}: " . floor($floatNums[1]) . "<br>";  
        echo "Round of {$floatNums[2]}: " . round($floatNums[2]) . "<br>";  
        echo "Sqrt of {$floatNums[4]}: " . sqrt($floatNums[4]) . "<br>";  
        echo "Log of {$floatNums[3]}: " . log($floatNums[3]) . "<br>";  
        echo "Exp of {$floatNums[2]}: " . exp($floatNums[2]) . "<br>";  
        echo "Absolute value of -{$wholeNums[0]}: " . abs(-$wholeNums[0]) . "<br>";  

        echo "<h2>Math Functions on Whole Numbers:</h2>";
        echo "Min of array: " . min($wholeNums) . "<br>"; 
        echo "Max of array: " . max($wholeNums) . "<br>"; 
        echo "Pow of {$wholeNums[1]}^2: " . pow($wholeNums[1], 2) . "<br>";  
        echo "Random number between 1 and 100: " . rand(1, 100) . "<br>";  
        echo "Square Root of {$wholeNums[3]}: " . sqrt($wholeNums[3]) . "<br>";  
        echo "Modulo of {$wholeNums[4]} % 7: " . fmod($wholeNums[4], 7) . "<br>";  
        echo "Hypotenuse of 3 and 4: " . hypot(3, 4) . "<br>";  
        echo "Deg2Rad conversion of 180 degrees: " . deg2rad(180) . "<br>";  
        echo "Rad2Deg conversion of π radians: " . rad2deg(M_PI) . "<br>";  

        echo "<h2>Trigonometric Functions:</h2>";
        echo "Sin of 30 degrees: " . sin(deg2rad(30)) . "<br>";  
        echo "Cos of 60 degrees: " . cos(deg2rad(60)) . "<br>"; 
        echo "Tan of 45 degrees: " . tan(deg2rad(45)) . "<br>";  
        ?>
    </div>

    <footer>
        <p>&copy; Created by Jonjie V. Tribunalo Jr.</p>
        <p>Date Created: October 10, 2024</p>
        <p>All rights reserved.</p>
    </footer>
</body>
</html>
