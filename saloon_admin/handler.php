<?php
session_start();
if (!isset($_SESSION['email'])) {

    echo "<script>window.open('../Saloon/index.php','_self')</script>";
}
include('includes/header.php');
include('includes/navbar.php');
?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Appointments</h1>

    </div>

    <!-- Content Row -->
    <div class="container">

        <!-- Earnings (Monthly) Card Example -->

        <?php

        include('../Home/connect.php');
        $aid = $_GET['id'];
        $sql = "UPDATE appointments SET a_status='done' WHERE id='$aid'";
        $results = mysqli_query($conn, $sql);
        if ($results) {
            echo "<script>alert('Service Provided.')</script>";
            echo "<script>window.open('completed_appointments.php','_self')</script>";
        }


        ?>
    </div>

    <?php
    include('includes/scripts.php');


    ?>