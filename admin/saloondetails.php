<?php
session_start();
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
                    Show Saloons

                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Show Saloons</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-sm-9">


                        <?php
                        include('../Home/connect.php');

                        $id = $_GET['sal_id'];
                        $sql = "SELECT * FROM saloon WHERE id='$id'";

                        $results = $conn->query($sql);
                        $final = $results->fetch_assoc();
                        ?>
                        
                        <h3>ID : <?php echo $final['id'] ?></h3>
                        <hr><br>
                        <h3>Saloon Name : <?php echo $final['username'] ?></h3>
                        <hr><br>
                        <h3>Email : <?php echo $final['email']?></h3>
                        <hr><br>
                        <h3>Mobile No. : <?php echo $final['mobile_no'] ?></h3>
                        <hr><br>
                        <h3>Address : <?php echo $final['address']?></h3>
                        <hr><br>
                        <img src="saloon_admin/uploads/<?php echo $final['picture'] ?>" alt="<?php echo $final['picture'] ?>" style="height: 300px; width: 300px;">

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