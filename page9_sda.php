<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single-dimensional Array</title>
    <link rel="stylesheet" href="phpbody.css">
    <link rel="stylesheet" href="phplink.css">
</head>
<body>
    <nav>
        <div class="nav1 button"><button onclick="window.location.href
            ='project1.php'">Back to Main Menu</button></div>
    </nav>
    <div class="box">
        <h1>Single-dimensional Array</h1>
        <?php

            $people = [
                ["name" => "Alice", "age" => 30, "sex" => "F", "nationality" => "USA"],
                ["name" => "Bob", "age" => 25, "sex" => "M", "nationality" => "Canada"],
                ["name" => "Charlie", "age" => 35, "sex" => "M", "nationality" => "UK"],
                ["name" => "David", "age" => 40, "sex" => "M", "nationality" => "Australia"],
                ["name" => "Eve", "age" => 28, "sex" => "F", "nationality" => "USA"],
                ["name" => "Frank", "age" => 22, "sex" => "M", "nationality" => "Germany"],
                ["name" => "Grace", "age" => 31, "sex" => "F", "nationality" => "France"],
                ["name" => "Heidi", "age" => 29, "sex" => "F", "nationality" => "Italy"],
                ["name" => "Ivan", "age" => 34, "sex" => "M", "nationality" => "Russia"],
                ["name" => "Judy", "age" => 27, "sex" => "F", "nationality" => "Brazil"]
            ];

            echo "<h2>Unsorted List:</h2>";
            foreach ($people as $person) {
                echo "{$person['name']} - {$person['age']} - {$person['sex']} - {$person['nationality']}<br>";
            }


            function sort_by_name(&$people) {
                for ($i = 0; $i < count($people) - 1; $i++) {
                    for ($j = $i + 1; $j < count($people); $j++) {
                        if ($people[$i]['name'] > $people[$j]['name']) {
                            $temp = $people[$i];
                            $people[$i] = $people[$j];
                            $people[$j] = $temp;
                        }
                    }
                }
            }


            sort_by_name($people);

            echo "<h2>Sorted List:</h2>";
            foreach ($people as $person) {
                echo "{$person['name']} - {$person['age']} - {$person['sex']} - {$person['nationality']}<br>";
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
