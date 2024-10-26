<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two-dimensional Array</title>
    <link rel="stylesheet" href="phpbody.css">
    <link rel="stylesheet" href="phplink.css">
</head>
<body>
    <nav>
        <div class="nav1 button"><button onclick="window.location.href
            ='project1.php'">Back to Main Menu</button></div>
    </nav>
    <div class="box">
        <h1>Two-dimensional Array</h1>
        <?php
            $n = 3;
            $array = [
                [5, 10, 15],
                [20, 25, 30],
                [35, 40, 45]
            ];

            echo "<h2>Array:</h2>";
            for ($i = 0; $i < $n; $i++) {
                for ($j = 0; $j < $n; $j++) {
                    echo $array[$i][$j] . " ";
                }
                echo "<br>";
            }

            $overall_sum = 0;
            $overall_min = PHP_INT_MAX;
            $overall_max = PHP_INT_MIN;

            echo "<h2>Row and Column Sums, Averages, Min, and Max:</h2>";
            for ($i = 0; $i < $n; $i++) {

                $row_sum = array_sum($array[$i]);
                $row_avg = $row_sum / $n;
                $row_min = min($array[$i]);
                $row_max = max($array[$i]);
                echo "Row $i - Sum: $row_sum, Average: $row_avg, Min: $row_min, Max: $row_max<br>";


                $col_sum = 0;
                $col_min = PHP_INT_MAX;
                $col_max = PHP_INT_MIN;
                for ($j = 0; $j < $n; $j++) {
                    $col_sum += $array[$j][$i];
                    if ($array[$j][$i] < $col_min) $col_min = $array[$j][$i];
                    if ($array[$j][$i] > $col_max) $col_max = $array[$j][$i];
                }
                $col_avg = $col_sum / $n;
                echo "Column $i - Sum: $col_sum, Average: $col_avg, Min: $col_min, Max: $col_max<br>";


                $overall_sum += $row_sum;
                $overall_min = min($overall_min, $row_min);
                $overall_max = max($overall_max, $row_max);
            }


            $diag1_sum = 0;
            $diag2_sum = 0;
            for ($i = 0; $i < $n; $i++) {
                $diag1_sum += $array[$i][$i];
                $diag2_sum += $array[$i][$n - $i - 1];
            }
            $diag1_avg = $diag1_sum / $n;
            $diag2_avg = $diag2_sum / $n;
            echo "<h2>Diagonal Sums and Averages:</h2>";
            echo "Main Diagonal - Sum: $diag1_sum, Average: $diag1_avg<br>";
            echo "Secondary Diagonal - Sum: $diag2_sum, Average: $diag2_avg<br>";

            $overall_avg = $overall_sum / ($n * $n);

            echo "<h2>Overall Sum, Average, Min, and Max:</h2>";
            echo "Overall Sum: $overall_sum, Average: $overall_avg<br>";
            echo "Overall Min: $overall_min, Overall Max: $overall_max<br>";
        ?>

    </div>

    <footer>
        <p>&copy; Created by Jonjie V. Tribunalo Jr.</p>
        <p>Date Created: October 10, 2024</p>
        <p>All rights reserved.</p>
    </footer>
</body>
</html>
