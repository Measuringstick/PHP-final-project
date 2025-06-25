<?php
require_once("config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM students WHERE id = $id";

    if (mysqli_query($conn, $query)) {
      
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "No student ID specified.";
}
?>