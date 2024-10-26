<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Constants</title>
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
        <h1>Using Constants</h1>
        
        <?php

        define('PI', 3.1416);
        define('GRAVITY', 9.81); 
        define('LIGHT_SPEED', 299792458); 
        define('PLANCK_CONSTANT', 6.62607015e-34); 
        define('BOLTZMANN_CONSTANT', 1.380649e-23); 
        define('AVOGADRO_NUMBER', 6.02214076e23); 
        define('GOLDEN_RATIO', 1.618);
        define('EULER_NUMBER', 2.718);
        define('EARTH_RADIUS', 6371000); 
        define('MOON_RADIUS', 1737000); 


        echo "<h2>Mathematical and Physical Constants:</h2>";
        echo "1. PI: " . PI . "<br>";
        echo "2. Gravity (Acceleration due to gravity on Earth): " . GRAVITY . " m/s²<br>";
        echo "3. Speed of Light: " . LIGHT_SPEED . " m/s<br>";
        echo "4. Planck's Constant: " . PLANCK_CONSTANT . " J·s<br>";
        echo "5. Boltzmann Constant: " . BOLTZMANN_CONSTANT . " J/K<br>";
        echo "6. Avogadro Number: " . AVOGADRO_NUMBER . " mol⁻¹<br>";
        echo "7. Golden Ratio: " . GOLDEN_RATIO . "<br>";
        echo "8. Euler's Number (e): " . EULER_NUMBER . "<br>";
        echo "9. Earth's Radius: " . EARTH_RADIUS . " m<br>";
        echo "10. Moon's Radius: " . MOON_RADIUS . " m<br>";

        echo "<h2>Examples of using constants:</h2>";


        $radius = 5;
        $circumference = 2 * PI * $radius;
        echo "Example 1: Circumference of a circle with radius $radius m: " . $circumference . " m<br>";


        $mass = 70; 
        $weight = $mass * GRAVITY;
        echo "Example 2: Weight of an object with mass $mass kg on Earth: " . $weight . " N (Newtons)<br>";


        $wavelength = 500e-9; 
        $energy = PLANCK_CONSTANT * LIGHT_SPEED / $wavelength;
        echo "Example 3: Energy of a photon with wavelength 500 nm: " . $energy . " J (Joules)<br>";


        $moles = 2;
        $molecules = $moles * AVOGADRO_NUMBER;
        echo "Example 4: Number of molecules in $moles mol of substance: " . $molecules . " molecules<br>";


        $time = 3; 
        $growth = exp($time);
        echo "Example 5: Exponential growth after $time hours: " . $growth . "<br>";

        ?>
    </div>

    <footer>
        <p>&copy; Created by Jonjie V. Tribunalo Jr.</p>
        <p>Date Created: October 10, 2024</p>
        <p>All rights reserved.</p>
    </footer>
</body>
</html>
