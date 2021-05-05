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
               <div class="container">
               
        <table class="table">
            <thead>
                <tr>

                    <th scope="col">Username</th>
                    <th scope="col">Product name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Product picture</th>
                    <th scope="col">Address</th>
                    <th scope="col">Mobile no</th>
                    <th scope="col">Email</th>
                    <th scope="col">date</th>
                    
                </tr>
            </thead>
            <?php
            include('../Home/connect.php');
            $email = $_SESSION['email'];
            $sql = "SELECT id FROM users WHERE email='$email'";
            $results = mysqli_query($conn, $sql);
            $final = mysqli_fetch_array($results);

            $uid = $final['id'];
            $sql2 = "SELECT * FROM orders WHERE uid='$uid' and status='payment_done'";
            $results2 = mysqli_query($conn, $sql2);





            /*$sal_id = $final2['sal_id'];
            $sql3 = "SELECT username FROM saloon where id='$sal_id'";
            $results3=mysqli_query($conn,$sql3);
            $final3=mysqli_fetch_array($results3);*/
            while ($final2 = mysqli_fetch_array($results2)) {
                $product = $final2['pid'];
                $sql3 = "SELECT price,picture from products WHERE id='$product'";
                $results3 = mysqli_query($conn, $sql3);
                if ($results3) {
                    while ($row = mysqli_fetch_array($results3)) {
                        $price = $row['price'];
                        $picture = $row['picture'];
                        
                    }
                }
            ?>


                <tbody>
                    <tr>

                        <td><?php echo $final2['uname'] ?></td>
                        <td><?php echo $final2['pname'] ?></td>
                        <td><?php echo $price ?></td>
                        <td> <img src="../admin/uploads/<?php echo $picture ?>"  alt="<?php echo $picture ?>" style="height: 100px; width: 100px;"></td>
                        <td><?php echo $final2['address'] ?></td>
                        <td><?php echo $final2['mobile_no'] ?></td>
                        <td><?php echo $final2['email'] ?></td>
                        <td><?php echo $final2['date'] ?></td>
                        
                        


                    </tr>
                </tbody>
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