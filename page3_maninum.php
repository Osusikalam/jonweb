<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computing Student Grades</title>
    <link rel="stylesheet" href="phpbody.css">
    <link rel="stylesheet" href="phplink.css">
    <link rel="stylesheet" href="page3.css">
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
        background-color: black;
        padding: 20px;
        color: white;
        opacity: 95%;
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
    <h1>Enter Your Scores To Compute Your Grades</h1>
    <div class="container">
        <div class ="left-section">
        <form method="post" action="">
            <label for="avg_quizzes">Average Quiz Score (Midterm):</label>
            <input type="text" id="avg_quizzes" name="avg_quizzes" required><br>

            <label for="avg_projects">Average Project Score (Midterm):</label>
            <input type="text" id="avg_projects" name="avg_projects" required><br>

            <label for="midterm_exam">Midterm Exam Score:</label>
            <input type="text" id="midterm_exam" name="midterm_exam" required><br>

            <label for="final_avg_quizzes">Average Quiz Score (Final):</label>
            <input type="text" id="final_avg_quizzes" name="final_avg_quizzes" required><br>

            <label for="final_avg_projects">Average Project Score (Final):</label>
            <input type="text" id="final_avg_projects" name="final_avg_projects" required><br>

            <label for="final_exam">Final Exam Score:</label>
            <input type="text" id="final_exam" name="final_exam" required><br>
            <br>
            <br>
            <input type="submit" value="Calculate Grades">
        </form> 
        </div>
        <div class ="right-section">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $avg_quizzes = $_POST['avg_quizzes'];
            $avg_projects = $_POST['avg_projects'];
            $midterm_exam = $_POST['midterm_exam'];

            $final_avg_quizzes = $_POST['final_avg_quizzes'];
            $final_avg_projects = $_POST['final_avg_projects'];
            $final_exam = $_POST['final_exam'];


            function compute_grade($avg_quizzes, $avg_projects, $exam) {
                $grade = ($avg_quizzes * 0.3) + ($avg_projects * 0.2) + ($exam * 0.5);
                return $grade;
            }


            $midterm_grade = compute_grade($avg_quizzes, $avg_projects, $midterm_exam);
            echo "<p>Midterm Grade: $midterm_grade</p>";


            $tentative_final_grade = compute_grade($final_avg_quizzes, $final_avg_projects, $final_exam);
            echo "<p>Tentative Final Grade: $tentative_final_grade</p>";


            $final_final_grade = ($midterm_grade + $tentative_final_grade) / 2;
            echo "<p>Final Final Grade: $final_final_grade</p>";
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
