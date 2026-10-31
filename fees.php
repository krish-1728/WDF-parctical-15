<?php
session_start();
if (!isset($_SESSION['student_id'])) { header("Location: index.php"); exit(); }
?>
<style>
    /* Grid */
    .fee-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
    .fee-grid div {
        padding: 12px;
        border: 1px solid #ccc;
    }
    .heading {
        font-weight: bold;
        background: #e8e8e8;
    }
    /* Flexbox */
    .fee-row {
        display: flex;
        justify-content: space-between;
        padding: 12px;
        margin: 5px 0;
        border: 1px solid #ccc;
    }
    /* Responsive */
    @media (max-width: 600px) {
        .fee-grid {
            grid-template-columns: 1fr;
        }
        .fee-row {
            flex-direction: column;
        }
    }
</style>
<div class="card-body">
    <!-- CSS Grid -->
    <h4>CSS Grid</h4>
    <div class="fee-grid">
        <div class="heading">Total Fees</div>
        <div>₹60,000</div>
        <div class="heading">Fees Paid</div>
        <div>₹45,000</div>
        <div class="heading">Remaining Fees</div>
        <div>₹15,000</div>
        <div class="heading">Payment Status</div>
        <div>Partially Paid</div>
        <div class="heading">Last Payment Date</div>
        <div>10 July 2026</div>
    </div>
    <hr>
    <!-- Flexbox -->
    <h4>Flexbox</h4>
    <div class="fee-row">
        <b>Total Fees</b>
        <span>₹60,000</span>
    </div>
    <div class="fee-row">
        <b>Fees Paid</b>
        <span>₹45,000</span>
    </div>
    <div class="fee-row">
        <b>Remaining Fees</b>
        <span>₹15,000</span>
    </div>
    <div class="fee-row">
        <b>Payment Status</b>
        <span>Partially Paid</span>
    </div>
    <div class="fee-row">
        <b>Last Payment Date</b>
        <span>10 July 2026</span>
    </div>
    <hr>
    <!-- Bootstrap -->
    <h4>Bootstrap</h4>
    <table class="table table-bordered table-striped">
        <tr>
            <th>Total Fees</th>
            <td>₹60,000</td>
        </tr>
        <tr>
            <th>Fees Paid</th>
            <td>₹45,000</td>
        </tr>
        <tr>
            <th>Remaining Fees</th>
            <td>₹15,000</td>
        </tr>
        <tr>
            <th>Payment Status</th>
            <td>Partially Paid</td>
        </tr>
        <tr>
            <th>Last Payment Date</th>
            <td>10 July 2026</td>
        </tr>
    </table>
</div>

