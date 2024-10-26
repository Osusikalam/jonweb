<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Statements</title>
    <link rel="stylesheet" href="phpbody.css">
    <link rel="stylesheet" href="phplink.css">
</head>
<body>
    <nav>
        <div class="nav1 button"><button onclick="window.location.href
            ='project1.php'">Back to Main Menu</button></div>
    </nav>
    <div class="box">
        <h1>Loop Statements</h1>
        <?php
            $n = 5; 
            $m = 4; 
            
            echo "<h2>Multiplication Table ($n x $m):</h2>";
            for ($i = 1; $i <= $n; $i++) {
                for ($j = 1; $j <= $m; $j++) {
                    echo $i * $j . "&nbsp;&nbsp;";
                }
                echo "<br>";
            }

            echo "<h2>Fibonacci Series for $n terms:</h2>";
            $a = 0;
            $b = 1;
            $count = 0;
            while ($count < $n) {
                echo "$a ";
                $next = $a + $b;
                $a = $b;
                $b = $next;
                $count++;
            }
            

            echo "<h2>Fibonacci Series for $m terms:</h2>";
            $a = 0;
            $b = 1;
            $count = 0;
            while ($count < $m) {
                echo "$a ";
                $next = $a + $b;
                $a = $b;
                $b = $next;
                $count++;
            }


            echo "<h2>Factorial of $n:</h2>";
            $factorial = 1;
            $i = 1;
            do {
                $factorial *= $i;
                $i++;
            } while ($i <= $n);
            echo "Factorial: $factorial<br>";


            echo "<h2>Summation of $m:</h2>";
            $sum = 0;
            $i = 1;
            do {
                $sum += $i;
                $i++;
            } while ($i <= $m);
            echo "Sum: $sum<br>";
        ?>
    </div>

    <footer>
        <p>&copy; Created by Jonjie V. Tribunalo Jr.</p>
        <p>Date Created: October 10, 2024</p>
        <p>All rights reserved.</p>
    </footer>
</body>
</html>
