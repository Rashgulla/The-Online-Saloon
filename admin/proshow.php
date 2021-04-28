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

                        $id = $_GET['pro_id'];
                        $sql = "SELECT * FROM products WHERE id='$id'";

                        $results = $conn->query($sql);
                        $final = $results->fetch_assoc();
                        ?>

                        <h3>Name : <?php echo $final['name'] ?></h3>
                        <hr><br>
                        <h3>Price : <?php echo $final['price'] ?>Rs.</h3>
                        <hr><br>
                        <h3>Description : <?php echo $final['description'] ?></h3>
                        <hr><br>
                        <img src="uploads/<?php echo $final['picture'] ?>" alt="<?php echo $final['picture'] ?>" style="height: 300px; width: 300px;">

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