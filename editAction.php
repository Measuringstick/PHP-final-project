<?php
require_once("config.php"); 

if (isset($_POST['update'])) {
    $id     = mysqli_real_escape_string($conn, $_POST['id']);
    $sid    = mysqli_real_escape_string($conn, $_POST['sid']);
    $name   = mysqli_real_escape_string($conn, $_POST['name']);
    $age    = mysqli_real_escape_string($conn, $_POST['age']);
    $email  = mysqli_real_escape_string($conn, $_POST['email']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);

    // Check for empty fields
    if (empty($sid) || empty($name) || empty($age) || empty($email) || empty($gender) || empty($course)) {
        echo "<p style='color:red;'>All fields are required.</p>";
        echo "<a href='javascript:self.history.back();'>Go Back</a>";
    } else {
        // Update query
        $query = "UPDATE students SET 
                    student_id = '$sid',
                    full_name = '$name',
                    age = '$age',
                    email = '$email',
                    gender = '$gender',
                    course = '$course'
                  WHERE id = $id";

        if (mysqli_query($conn, $query)) {
            echo "<p style='color:green;'>Student updated successfully!</p>";
            echo "<a href='dashboard.php'>Back to Dashboard</a>";
        } else {
            echo "<p style='color:red;'>Update failed: " . mysqli_error($conn) . "</p>";
        }
    }
}
?>