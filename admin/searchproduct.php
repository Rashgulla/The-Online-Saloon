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
                <div class="search">
                    <form class="form-inline my-2 my-lg-0" action="searchproduct.php" method="GET">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                        <button type="submit" class="btn btn-success">Search</button>
                    </form>
                </div>
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
                        <h1>Search results for <b><em><?php echo $_GET['search'] ?></em></b></h1>
                        <div class="result">
                            <?php
                            include('../Home/connect.php');
                            $sno = 0;
                            $name = $_GET['search'];
                            $sql = "SELECT * FROM products WHERE name='$name'";
                            $results = mysqli_query($conn, $sql);
                            while ($final = $results->fetch_assoc()) {
                                $sno += 1; ?>
                                <h3><?php echo $sno . ')'; ?>
                                    <a href="proshow.php?pro_id=<?php echo $final['id'] ?>">
                                        <?php echo $final['name'] ?>: <?php echo $final['id'] ?><br>
                                    </a>
                                </h3>

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