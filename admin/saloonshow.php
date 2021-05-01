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
                        $sno=0;
                        $sql = "SELECT * FROM saloon";

                        $results = $conn->query($sql);
                        while ($final = $results->fetch_assoc()) {$sno+=1; ?>
                            <h3><?php echo $sno.')';?>
                            <a href="saloondetails.php?sal_id=<?php echo $final['id'] ?>">
                            <?php echo $final['username'] ?>: <?php echo $final['id'] ?><br>
                            </a></h3>

                            <a href="saloondelete.php?d_id=<?php echo $final['id'] ?>">
                                <button type="button" class="btn btn-danger">Delete</button>
                            </a>
                            <hr>

                        <?php
                        }
                        ?>

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