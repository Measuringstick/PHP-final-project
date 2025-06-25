<?php
include("config.php");

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Pagination settings
$limit = 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Fetch total students
$totalResult = $conn->query("SELECT COUNT(*) AS total FROM students");
$totalRow = $totalResult->fetch_assoc();
$totalStudents = $totalRow['total'];
$totalPages = ceil($totalStudents / $limit);

// Fetch students for current page
$result = $conn->query("SELECT * FROM students LIMIT $limit OFFSET $offset");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            background-color: #1e1e2f;
            color: #f0f0f0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            background-color: #2b2b3c;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
            animation: fadeIn 0.6s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2, h3 {
            color: #ffffff;
        }

        a.btn {
            display: inline-block;
            padding: 8px 15px;
            border-radius: 8px;
            font-weight: bold;
            text-decoration: none;
            transition: background 0.3s ease;
            margin-right: 10px;
        }

        .btn-success { background: #6fcf97; color: #1e1e2f; }
        .btn-success:hover { background: #5cbf88; }

        .btn-danger { background: #e57373; color: #1e1e2f; }
        .btn-danger:hover { background: #d35c5c; }

        .btn-warning { background: #f2c94c; color: #1e1e2f; }
        .btn-warning:hover { background: #e6b62e; }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #444;
        }

        th {
            background-color: #383850;
            color: #ffffff;
        }

        tr:nth-child(even) {
            background-color: #252536;
        }

        tr:hover {
            background-color: #303047;
        }

        .pagination {
            list-style-type: none;
            padding: 0;
            margin-top: 25px;
            display: flex;
            justify-content: center;
            gap: 8px;
        }

        .pagination li {
            display: inline;
        }

        .pagination a {
            color: #f0f0f0;
            background-color: #444;
            padding: 8px 14px;
            border-radius: 6px;
            text-decoration: none;
            transition: background 0.3s;
        }

        .pagination a:hover {
            background-color: #666;
        }

        .pagination .active a {
            background-color: #6fcf97;
            color: #1e1e2f;
            font-weight: bold;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome, <?= htmlspecialchars($_SESSION['username']); ?>!</h2>
        <p>
            <a href="logout.php" class="btn btn-danger">Logout</a>
            <a href="add.php" class="btn btn-success">Add Student</a>
        </p>

        <h3>Student List</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Student ID</th>
                    <th>Full Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Course</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['student_id'] ?></td>
                    <td><?= $row['full_name'] ?></td>
                    <td><?= $row['age'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['gender'] ?></td>
                    <td><?= $row['course'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
                        <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>

        <!-- Pagination -->
        <ul class="pagination">
            <?php if ($page > 1): ?>
                <li><a href="?page=<?= $page - 1 ?>">« Prev</a></li>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <li class="<?= ($i == $page) ? 'active' : '' ?>">
                    <a href="?page=<?= $i ?>"><?= $i ?></a>
                </li>
            <?php endfor; ?>

            <?php if ($page < $totalPages): ?>
                <li><a href="?page=<?= $page + 1 ?>">Next »</a></li>
            <?php endif; ?>
        </ul>
    </div>
</body>
</html>
