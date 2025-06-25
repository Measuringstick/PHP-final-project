<?php
require_once("config.php"); 


$id = $_GET['id'];


$result = mysqli_query($conn, "SELECT * FROM students WHERE id = $id");

if (!$result || mysqli_num_rows($result) == 0) {
    echo "Student not found.";
    exit;
}

$data = mysqli_fetch_assoc($result);

$sid    = $data['student_id'];
$name   = $data['full_name'];
$age    = $data['age'];
$email  = $data['email'];
$gender = $data['gender'];
$course = $data['course'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Student</h2>
    <a href="dashboard.php">← Back to Dashboard</a>
    <form method="post" action="editAction.php">
        <div class="mb-3">
            <label>Student ID</label>
            <input type="text" name="sid" class="form-control" value="<?php echo $sid; ?>">
        </div>
        <div class="mb-3">
            <label>Full Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
        </div>
        <div class="mb-3">
            <label>Age</label>
            <input type="number" name="age" class="form-control" value="<?php echo $age; ?>">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
        </div>
        <div class="mb-3">
            <label>Gender</label>
            <select name="gender" class="form-control">
                <option value="Male" <?php if($gender == 'Male') echo 'selected'; ?>>Male</option>
                <option value="Female" <?php if($gender == 'Female') echo 'selected'; ?>>Female</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Course</label>
            <input type="text" name="course" class="form-control" value="<?php echo $course; ?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>