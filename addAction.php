<?php
require_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Student Result</title>
    <style>
        body {
            background-color: #1e1e2f;
            color: #f0f0f0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .message-box {
            background: #2b2b3c;
            padding: 30px 25px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
            max-width: 500px;
            width: 100%;
            text-align: center;
            animation: fadeIn 0.6s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .success {
            color: #c8facc;
            background-color: #2c5c3a;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .error {
            color: #ffcdd2;
            background-color: #5c2c2c;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 16px;
            border-radius: 8px;
            background-color: #6fcf97;
            color: #1e1e2f;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        a:hover {
            background-color: #5cbf88;
        }
    </style>
</head>
<body>
    <div class="message-box">
    <?php
    if (isset($_POST['submit'])) {
        $sid    = mysqli_real_escape_string($conn, $_POST['sid']);
        $name   = mysqli_real_escape_string($conn, $_POST['name']);
        $age    = mysqli_real_escape_string($conn, $_POST['age']);
        $email  = mysqli_real_escape_string($conn, $_POST['email']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $course = mysqli_real_escape_string($conn, $_POST['course']);

        if (empty($sid) || empty($name) || empty($age) || empty($email) || empty($gender) || empty($course)) {
            echo "<div class='error'>All fields are required.</div>";
            echo "<a href='add.php'>Go Back</a>";
        } else {
            $sql = "INSERT INTO students (student_id, full_name, age, email, gender, course) 
                    VALUES ('$sid', '$name', '$age', '$email', '$gender', '$course')";

            if (mysqli_query($conn, $sql)) {
                echo "<div class='success'>Student added successfully!</div>";
                echo "<a href='dashboard.php'>Back to Dashboard</a>";
            } else {
                echo "<div class='error'>Failed to insert: " . htmlspecialchars(mysqli_error($conn)) . "</div>";
                echo "<a href='add.php'>Go Back</a>";
            }
        }
    }
    ?>
    </div>
</body>
</html>
