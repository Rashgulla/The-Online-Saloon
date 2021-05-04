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
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
      
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> saloon appointment</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

               <a href="appointments.php" style="text-decoration:none; color:black;"><h4>View Appointments</h4></a>

              </div>
            </div>
           
          </div>
        </div>
      
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total APPOINTMENT</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
            </div>
            <div class="col-auto">
              
            </div>
          </div>
        </div>
      </div>
    </div>

    


  <!-- Content Row -->








  <?php
include('includes/scripts.php');

?>