<?php
session_start();
if (!isset($_SESSION['student_id'])) { header("Location: index.php"); exit(); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
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
            grid-template-columns: 1fr 1fr;
        }
        .grid div {
            padding: 12px;
            border: 1px solid #ccc;
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
            .grid {
                grid-template-columns: 1fr;
            }

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
            Student Details
        </h2>
        <div class="card-body">
            <!-- CSS Grid -->
            <h4>CSS Grid</h4>
            <div class="grid">
                <div><b>Name</b></div>
                <div>Shrey Patel</div>
                <div><b>Student ID</b></div>
                <div>STU101</div>
                <div><b>Course</b></div>
                <div>BCA</div>
                <div><b>Semester</b></div>
                <div>3</div>
                <div><b>Department</b></div>
                <div>Computer Science</div>
                <div><b>Email</b></div>
                <div>shrey@gmail.com</div>
                <div><b>Phone</b></div>
                <div>9876543210</div>
            </div>
            <hr>
            <!-- Flexbox -->
            <h4>Flexbox</h4>
            <div class="flex"><b>Name</b><span>Shrey Patel</span></div>
            <div class="flex"><b>Course</b><span>BCA</span></div>
            <div class="flex"><b>Semester</b><span>3</span></div>
            <hr>
            <!-- Bootstrap -->
            <h4>Bootstrap</h4>
            <table class="table table-bordered table-striped">
                <tr><th>Name</th><td>Shrey Patel</td></tr>
                <tr><th>Student ID</th><td>STU101</td></tr>
                <tr><th>Course</th><td>BCA</td></tr>
                <tr><th>Semester</th><td>3</td></tr>
                <tr><th>Department</th><td>Computer Science</td></tr>
                <tr><th>Email</th><td>shrey@gmail.com</td></tr>
                <tr><th>Phone</th><td>9876543210</td></tr>
            </table>
        </div>
    </div>
</div>
</body>
</html>

