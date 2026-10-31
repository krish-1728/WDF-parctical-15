<?php
session_start();
if (!isset($_SESSION['student_id'])) { header("Location: index.php"); exit(); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Address</title>
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
            Student Address
        </h2>
        <div class="card-body">
            <!-- CSS Grid -->
            <h4>CSS Grid</h4>
            <div class="grid">
                <div><b>House No.</b></div>
                <div>24</div>
                <div><b>Street</b></div>
                <div>Shiv Nagar</div>
                <div><b>City</b></div>
                <div>Ahmedabad</div>

                <div><b>State</b></div>
                <div>Gujarat</div>
                <div><b>Country</b></div>
                <div>India</div>
                <div><b>Pincode</b></div>
                <div>380001</div>
            </div>
            <hr>
            <!-- Flexbox -->
            <h4>Flexbox</h4>
            <div class="flex"><b>City</b><span>Ahmedabad</span></div>
            <div class="flex"><b>State</b><span>Gujarat</span></div>
            <div class="flex"><b>Pincode</b><span>380001</span></div>
            <hr>
            <!-- Bootstrap -->
            <h4>Bootstrap</h4>
            <table class="table table-bordered table-striped">
                <tr><th>House No.</th><td>24</td></tr>
                <tr><th>Street</th><td>Shiv Nagar</td></tr>
                <tr><th>City</th><td>Ahmedabad</td></tr>
                <tr><th>State</th><td>Gujarat</td></tr>
                <tr><th>Country</th><td>India</td></tr>
                <tr><th>Pincode</th><td>380001</td></tr>
            </table>
        </div>
    </div>
</div>
</body>
</html>
