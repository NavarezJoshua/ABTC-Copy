<?php 
    if (!isset($_SESSION)) {
        session_start();
    }
    if(!isset($_SESSION['AdminID'])){
        echo"<script>window.location.href='../Login.php'</script>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js" integrity="sha512-7U4rRB8aGAHGVad3u2jiC7GA5/1YhQcQjxKeaVms/bT66i3LVBMRcBI9KwABNWnxOSwulkuSXxZLGuyfvo7V1A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>    
    <?php include 'php/stats.php' ?>
    <?php include "nav.php" ?>
    <main class="main">
        <div id="dashboard">
            <div id="column1">
                <!-- TOTAL UESR ACCOUNTS -->
                <div class="user-account">
                    <?php include 'chart/user-accounts.php' ?>
                </div>

                <!-- TOTAL APPOINTMENTS -->
                <div class="appointment-records">
                    <?php include 'chart/tot-appoint.php' ?>
                </div>

                <!-- TOTAL UESR PATIENTS -->
                <div class="total-patients">
                    <?php include 'chart/tot-patients.php' ?>
                </div>

                <!-- TOTAL RECORDS -->
                <div class="total-records">
                    <?php include 'chart/tot-records.php' ?>
                </div>
            </div>

            <div class="graph-box">
                <!-- Age -->
                <div class="box">
                    <canvas id="age"></canvas>
                </div>

                <!-- TOP BARANGAY -->
                <div class="box">
                    <canvas id="animalChart"></canvas>
                </div>
            </div>

            <div class="graph-box2">
                <div class="box">
                    <canvas id="exposureChart"></canvas>
                </div>
                <div class="box">
                    <canvas id="dash_sex"></canvas>
                </div> 
            </div>
        </div> 
    </main>
    <?php include 'chart/dashboard_exposure.php' ?>
    <?php include 'chart/dashboard_age.php' ?>
    <?php include 'chart/dashboard_barangay.php' ?>
    <?php include 'chart/dashboard_sex.php' ?>
</body>


</html>

