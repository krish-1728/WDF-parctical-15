<?php
session_start();
if (!isset($_SESSION['student_id'])) { header("Location: index.php"); exit(); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parents Information</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f2f2f2;
            font-family: Arial, sans-serif;
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
            Parents Information
        </h2>
        <div class="card-body">
            <!-- CSS Grid -->
            <h4>CSS Grid</h4>
            <div class="grid">
                <div><b>Father's Name</b></div>
                <div>Mahesh Patel</div>
                <div><b>Occupation</b></div>
                <div>Businessman</div>
                <div><b>Contact</b></div>
                <div>9876543210</div>
                <div><b>Mother's Name</b></div>
                <div>Anita Patel</div>
                <div><b>Occupation</b></div>
                <div>Teacher</div>
                <div><b>Contact</b></div>
                <div>9876501234</div>
            </div>
            <hr>

            <!-- Flexbox -->
            <h4>Flexbox</h4>
            <div class="flex">
                <b>Father's Name</b>
                <span>Mahesh Patel</span>
            </div>
            <div class="flex">
                <b>Mother's Name</b>
                <span>Anita Patel</span>
            </div>
            <div class="flex">
                <b>Contact</b>
                <span>9876543210</span>
            </div>
            <hr>
            <!-- Bootstrap -->
            <h4>Bootstrap</h4>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Father's Name</th>
                        <td>Mahesh Patel</td>
                    </tr>
                    <tr>
                        <th>Occupation</th>
                        <td>Businessman</td>
                    </tr>
                    <tr>
                        <th>Contact</th>
                        <td>9876543210</td>
                    </tr>
                    <tr>
                        <th>Mother's Name</th>
                        <td>Anita Patel</td>
                    </tr>
                    <tr>
                        <th>Occupation</th>
                        <td>Teacher</td>
                    </tr>
                    <tr>
                        <th>Contact</th>
                        <td>9876501234</td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
</div>
</body>
</html>
