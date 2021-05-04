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

            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <h1><?php echo "Pay Here"?></h1>
                <div class="container">
                     <?php
                        include('../Home/connect.php');
                        $sal_id = $_GET['id'];
                        $sql = "SELECT QR FROM saloon WHERE id='$sal_id'";
                        $results = mysqli_query($conn,$sql);
                        while ($final = mysqli_fetch_array($results)) {



                        ?> <img src="../saloon_admin/qr/<?php echo $final['QR'] ?>" alt="<?php echo $final['QR'] ?>" style="height: 300px; width: 300px;">


                    <?php
                        }
                    ?>


                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php
        //include('adminpartials/footer.php');
        ?>
</body>

</html>