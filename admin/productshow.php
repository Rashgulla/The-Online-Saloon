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
                    Show products

                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Show products</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-sm-9">

                        <?php
                        include('../Home/connect.php');

                        $sql = "SELECT * FROM products";

                        $results = $conn->query($sql);
                        while ($final = $results->fetch_assoc()) { ?>

                            <a href="proshow.php?pro_id=<?php echo $final['id'] ?>">
                                <h3><?php echo $final['id'] ?>: <?php echo $final['name'] ?></h3><br>
                            </a>

                            <a href="proupdate.php?up_id=<?php echo $final['id'] ?>">
                                <button type="button" class="btn btn-warning">Update</button>
                            </a>

                            <a href="prodelete.php?del_id=<?php echo $final['id'] ?>">
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