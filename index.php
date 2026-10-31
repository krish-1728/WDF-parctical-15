<?php
session_start();
require 'db.php';
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $conn->real_escape_string($_POST['student_id']);
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM students WHERE student_id='$student_id' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['student_id'] = $row['student_id'];
        $_SESSION['name'] = $row['name'];
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid ID or Password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Portal Login</title>
    <style>
        body { font-family: Arial; background-color: #f2f2f2; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        form { background-color: white; padding: 30px; width: 300px; border-radius: 10px; box-shadow: 0 0 10px gray; }
        h1 { text-align: center; margin-bottom: 20px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input { width: 100%; padding: 10px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px; }
        button { width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background-color: #0056b3; }
        .error { color: red; text-align: center; margin-bottom: 10px; }
    </style>
</head>
<body>
    <form method="POST" action="">
        <h1>Student Portal</h1>
        <?php if($error) echo "<div class='error'>$error</div>"; ?>
        <label>Student ID</label>
        <input type="text" name="student_id" placeholder="Enter Student ID" required>
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter Password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>

logout.php :

<?php
session_start();
session_unset();
session_destroy();
header("Location: index.php");
exit();
?>

achievements.php :

<?php
session_start();
if (!isset($_SESSION['student_id'])) { header("Location: index.php"); exit(); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievements</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f2f2f2;
            font-family: Arial;
        }
        /* CSS Grid */
        .grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
        }
        .grid div {
            padding: 12px;
            border: 1px solid #ccc;
            background: white;
        }
        /* Flexbox */
        .flex {
            display: flex;
            justify-content: space-between;
            padding: 12px;
            margin: 5px 0;
            border: 1px solid #ccc;
            background: white;
        }
        /* Responsive */
        @media (max-width: 600px) {
            .flex {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
<div class="container my-5">
    <div class="card shadow">
        <h2 class="text-center bg-primary text-white p-3">
            Achievements
        </h2>
        <div class="card-body">
            <!-- CSS Grid -->
            <h4>CSS Grid</h4>
            <div class="grid">
                <div>🏆 First Prize in Coding Competition</div>
                <div>🎖 Java Programming Certificate</div>
                <div>🏅 College Cricket Tournament Runner-up</div>
                <div>📜 Web Development Workshop Certificate</div>
                <div>⭐ Best Student Award - 2025</div>
            </div>
            <hr>

            <!-- Flexbox -->
            <h4>Flexbox</h4>
            <div class="flex">🏆 Coding Competition</div>
            <div class="flex">🎖 Java Certificate</div>
            <div class="flex">🏅 Cricket Tournament Runner-up</div>
            <hr>
            <!-- Bootstrap -->
            <h4>Bootstrap</h4>
            <ul class="list-group">
                <li class="list-group-item">🏆 First Prize in Coding Competition</li>
                <li class="list-group-item">🎖 Java Programming Certificate</li>
                <li class="list-group-item">🏅 College Cricket Tournament Runner-up</li>
                <li class="list-group-item">📜 Web Development Workshop Certificate</li>
                <li class="list-group-item">⭐ Best Student Award - 2025</li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
