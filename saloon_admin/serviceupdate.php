<?php

use function PHPSTORM_META\elementType;

session_start();
include('includes/header.php');
include('includes/navbar.php');
?>


<!-- Begin Page Content -->
<div class="container">
    <div class="container-fluid">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Update Service</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST">
                <?php
                $newid = $_GET['up_id'];

                include('../Home/connect.php');
                $sql = "SELECT * FROM services WHERE sid='$newid'";

                $results = $conn->query($sql);
                $final = $results->fetch_assoc();
                ?>

                <div class="box-body">
                    <div class="form-group">
                        <label for="service">Service Name</label>
                        <input type="text" class="form-control" value="<?php echo $final['service']?>" id="service" placeholder="Enter New Service" name="service">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" value="<?php echo $final['price']?>" id="price" placeholder="Enter New Price" name="price">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" value="<?php echo $final['description']?>" class="form-control" placeholder="Enter New Desciption" id="description" cols="30" rows="10"></textarea>
                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <input type="hidden" value="<?php echo $final['sid'] ?>" name="form_id">
                    <button type="submit" class="btn btn-primary" name="update">Update service</button>
                </div>
            </form>
        </div>

    </div>
</div>
<!--Update-->
<?php
include('../Home/connect.php');
if (isset($_POST['update'])) {
    $newid = $_POST['form_id'];
    $newservice = $_POST['service'];
    $newprice = $_POST['price'];
    $newdesc = $_POST['description'];

    $sql = "UPDATE services SET service='$newservice', price='$newprice', description='$newdesc' WHERE sid='$newid'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>window.open('serviceshow.php','_self')</script>";
    } 
    else {
        echo "<script> alert('Service Not Added');
        window.location.href='serviceshow.php';
        </script>";
    }
}
?>
