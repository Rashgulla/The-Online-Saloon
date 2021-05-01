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


            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>
                    <?php
                    include('../Home/connect.php');
                    $sql = "SELECT id FROM users ORDER BY id";
                    $results = mysqli_query($conn, $sql);
                    $row = mysqli_num_rows($results);
                    echo "$row";
                    ?>
                  </h3>

                  <p>User Registrations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer"> <i class="fa fa "></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>
                    <?php
                    include('../Home/connect.php');
                    $sql = "SELECT id FROM saloon ORDER BY id";
                    $results = mysqli_query($conn, $sql);
                    $row = mysqli_num_rows($results);
                    echo "$row";
                    ?>
                  </h3>

                  <p>Saloon Registrations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="saloonshow.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3>
                    <?php
                    include('../Home/connect.php');
                    $sql = "SELECT id FROM products ORDER BY id";
                    $results = mysqli_query($conn, $sql);
                    $row = mysqli_num_rows($results);
                    echo "$row";
                    ?>
                  </h3>

                  <p>Total Products</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="productshow.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>


            <div class="card-body">
              </p>

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