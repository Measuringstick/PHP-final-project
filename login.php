<?php
include("config.php");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($user = $result->fetch_assoc()) {
        if (hash('sha256', $password) === $user['password']) {
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Invalid password.";
        }
    } else {
        $error = "User not found.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            background-color: #1e1e2f;
            color: #f0f0f0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background: #2b2b3c;        
            border-radius: 15px;
            padding: 30px 40px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 0 15px rgba(0,0,0,0.4);
            animation: fadeIn 0.8s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #ffffff;
        }

        label {
            font-size: 0.9rem;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 7px;
            margin-top: 6px;
            margin-bottom: 16px;
            background: #1c1c2a;
            border: 1px solid #444;
            border-radius: 8px;
            color: #f0f0f0;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #6fcf97;
            background-color: #29293d;
            outline: none;
        }

        .btn {
            margin-top: 10px;
            width: 100%;
            background: #6fcf97;
            color: #1e1e2f;
            padding: 10px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #5cbf88;
        }

        .link-btn {
            display: block;
            text-align: center;
            margin-top: 12px;
            padding: 10px;
            border-radius: 8px;
            background-color: #444;
            color: #f0f0f0;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .link-btn:hover {
            background-color: #5a5a5a;
        }

        .error-msg {
            background-color: #5c2c2c;
            color: #ffcdd2;
            padding: 10px 15px;
            border-radius: 8px;
            margin-bottom: 15px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Login</h2>
        <?php if (isset($error)): ?>
            <div class="error-msg"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <form method="POST">
            <label>Username</label>
            <input type="text" name="username" required />

            <label>Password</label>
            <input type="password" name="password" required />

            <button type="submit" name="login" class="btn">Login</button>
        </form>

        <a href="register.php" class="link-btn">← Back to Register</a>
    </div>
</body>
</html>
