<?php
session_start();
if (!isset($_SESSION['email'])) {

  echo "<script>window.open('adminhome.php','_self')</script>";
}
?>
<!DOCTYPE html>
<html>
<?php
include('adminpartials/head.php');
?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php
    include('adminpartials/header.php');
    include('adminpartials/aside.php');
    ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class=" content">
        <!-- Small boxes (Stat box) -->
        <div class="container">
          <div class="card">
            <h3 class="card-header">Total saloon registered</h3>
            <h2>

              <?php echo "hello";?>
            
            </h2>
            <div class="card-body">
</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>


        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
    include('adminpartials/footer.php');
    ?>
</body>

</html>