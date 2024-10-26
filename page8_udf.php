<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-defined Functions</title>
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
        .lefty{
            margin-left: 5%;
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav1 button"><button onclick="window.location.href
            ='project1.php'">Back to Main Menu</button></div>
    </nav>
    <h1>User-defined Functions</h1>
        <div class="lefty">
        <h2>Problem: Calculate various properties of a rectangle</h2>
        <p>This program calculates multiple properties of a rectangle given its length and width. 
        <br>These properties include area, perimeter, diagonal, aspect ratio, and more. 
        <br>Each property is calculated using a specific user-defined function.</p>
        </div>
    <div class="container">
        <div class="left-section">
        <?php

            function calculate_area($length, $width) {
                return $length * $width;
            }


            function calculate_perimeter($length, $width) {
                return 2 * ($length + $width);
            }


            function calculate_diagonal($length, $width) {
                return sqrt(($length ** 2) + ($width ** 2));
            }


            function calculate_aspect_ratio($length, $width) {
                return $length / $width;
            }


            function is_square($length, $width) {
                return $length === $width;
            }


            function calculate_side_from_area($area, $other_side) {
                return $area / $other_side;
            }


            function calculate_side_from_perimeter($perimeter, $other_side) {
                return ($perimeter / 2) - $other_side;
            }


            function is_golden_ratio($length, $width) {
                $ratio = max($length, $width) / min($length, $width);
                return abs($ratio - 1.618) < 0.01;
            }


            function calculate_angle_with_diagonal($length, $width) {
                return rad2deg(atan($width / $length));
            }


            function calculate_scaled_area($length, $width, $scale) {
                return ($length * $scale) * ($width * $scale);
            }


            $length = 10;
            $width = 5;

            echo "<h3>Given Length: $length, Width: $width</h3>";
            echo "<p>Area: " . calculate_area($length, $width) . "</p>";
            echo "<p>Perimeter: " . calculate_perimeter($length, $width) . "</p>";
            echo "<p>Diagonal: " . calculate_diagonal($length, $width) . "</p>";
            echo "<p>Aspect Ratio: " . calculate_aspect_ratio($length, $width) . "</p>";
            echo "<p>Is Square: " . (is_square($length, $width) ? 'Yes' : 'No') . "</p>";
            echo "<p>Is Golden Ratio: " . (is_golden_ratio($length, $width) ? 'Yes' : 'No') . "</p>";
            echo "<p>Angle with Diagonal: " . calculate_angle_with_diagonal($length, $width) . "°</p>";
            echo "<p>Scaled Area (scale factor 2): " . calculate_scaled_area($length, $width, 2) . "</p>";


            $area = calculate_area($length, $width);
            $perimeter = calculate_perimeter($length, $width);
            echo "<p>Calculated Side from Area (using width): " . calculate_side_from_area($area, $width) . "</p>";
            echo "<p>Calculated Side from Perimeter (using width): " . calculate_side_from_perimeter($perimeter, $width) . "</p>";
        ?>
        </div>
        <div class="right-section">
        <h3>Explanation of Functions</h3>
        <ul>
            <li><strong>calculate_area:</strong> Computes the area of the rectangle by multiplying length and width.</li>
            <li><strong>calculate_perimeter:</strong> Computes the perimeter by adding the lengths of all sides.</li>
            <li><strong>calculate_diagonal:</strong> Calculates the diagonal using the Pythagorean theorem.</li>
            <li><strong>calculate_aspect_ratio:</strong> Finds the aspect ratio by dividing length by width.</li>
            <li><strong>is_square:</strong> Checks if length and width are equal, indicating a square.</li>
            <li><strong>calculate_side_from_area:</strong> Finds one side given the area and the other side.</li>
            <li><strong>calculate_side_from_perimeter:</strong> Finds one side given the perimeter and the other side.</li>
            <li><strong>is_golden_ratio:</strong> Checks if the rectangle’s aspect ratio approximates the golden ratio (1.618).</li>
            <li><strong>calculate_angle_with_diagonal:</strong> Calculates the angle between the diagonal and one side using trigonometry.</li>
            <li><strong>calculate_scaled_area:</strong> Finds the area of a scaled rectangle by applying a scaling factor to both dimensions.</li>
        </ul>
        </div>

    </div>

    <footer>
        <p>&copy; Created by Jonjie V. Tribunalo Jr.</p>
        <p>Date Created: October 10, 2024</p>
        <p>All rights reserved.</p>
    </footer>
</body>
</html>
