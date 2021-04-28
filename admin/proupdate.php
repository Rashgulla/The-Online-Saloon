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
                    Update product

                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Update product</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div>
                    <form role="form" action="proupdatehandler.php" method="POST" enctype="multipart/form-data">
                        <?php
                        $newid = $_GET['up_id'];
                    
                        include('../Home/connect.php');
                        $sql = "SELECT * FROM products WHERE id='$newid'";

                        $results = $conn->query($sql);
                        $final = $results->fetch_assoc();
                        ?>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Product Name</label>
                                <input type="text" class="form-control" id="name" value="<?php echo $final['name']?>" placeholder="Update product" name="name">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" id="price" value="<?php echo $final['price']?>" placeholder="Update price" name="price">
                            </div>
                            <div class="form-group">
                                <label for="picture">Picture</label>
                                <input type="file" id="picture" value="<?php echo $final['picture']?>" alt="No File" name="picture">
                                <p class="help-block">Upload a picture of a product</p>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description" value="<?php echo $final['description']?>" cols="30" rows="10" placeholder="Enter description"></textarea>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <input type="hidden" value="<?php echo $final['id']?>" name="form_id">
                            <button type="submit" class="btn btn-primary" name="update">Update Product</button>
                        </div>
                    </form>
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