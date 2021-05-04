<?php



session_start();
include('includes/header.php');
include('includes/navbar.php');
?>


<!-- Begin Page Content -->
<div class="container">
    <div class="container-fluid">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add Service</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST">
                <div class="box-body">
                    <div class="form-group">
                        <label for="service">Service Name</label>
                        <input type="text" class="form-control" id="service" placeholder="Enter Service" name="service" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" placeholder="Enter Desciption" id="description" cols="30" rows="10" required></textarea>
                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                <a href="appointment.php">
                    <button type="submit" class="btn btn-primary" name="add">Add service</button>
                </a>
                </div>
            </form>
        </div>

    </div>
</div>





<?php
//include('includes/scripts.php');
include('../Home/connect.php');
if (isset($_POST['add'])) {


    $saloon_id = $_SESSION['saloon_id'];
    $service = $_POST['service'];
    $price = $_POST['price'];
    $desc = $_POST['description'];

    $sql="INSERT INTO services(saloon_id,service,price,description) values('$saloon_id','$service','$price','$desc')";
    $results=mysqli_query($conn,$sql);
    
    if($results){
        //echo "<script>window.open('serviceshow.php','_self')</script>";
        echo "<script> alert('Service Added');
        window.location.href='serviceshow.php';
        </script>";
    }
    else{
        echo "<script> alert('Service Not Added');
        window.location.href='serviceshow.php';
        </script>";
    }
}

?>