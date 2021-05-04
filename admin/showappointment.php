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

                                <th scope="col">Sr. No.</th>
                                <th scope="col">Username</th>
                                <th scope="col">User ID</th>
                                <th scope="col">Saloon ID</th>
                                <th scope="col">Service ID</th>
                                <th scope="col">Appointment ID</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile No.</th>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                <th scope="col">Service</th>
                                <th scope="col">Price</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>

                        <?php
                        include('../Home/connect.php');
                        $sal_id = $_GET['id'];
                        $sno = 0;
                        $sql = "SELECT * FROM appointments WHERE sal_id='$sal_id'";

                        $results = $conn->query($sql);



                        while ($final = $results->fetch_assoc()) {
                            $sno += 1; 
                            $sid=$final['sid'];
                            $sql2="SELECT price,service FROM services WHERE sid='$sid'";
                            $results2=mysqli_query($conn,$sql2);
                            if($results2){
                                while($row=mysqli_fetch_array($results2)){
                                    $sname=$row['service'];
                                    $price=$row['price'];
                                }
                            }
                            ?>
                            
                            <tbody>
                                <tr>
                                    <td><?php echo $sno ?></td>
                                    <td><?php echo $final['uname'] ?></td>
                                    <td><?php echo $final['uid'] ?></td>
                                    <td><?php echo $final['sal_id'] ?></td>
                                    <td><?php echo $final['sid'] ?></td>
                                    <td><?php echo $final['id'] ?></td>
                                    <td><?php echo $final['email'] ?></td>
                                    <td><?php echo $final['mobile_no'] ?></td>
                                    <td><?php echo $final['date'] ?></td>
                                    <td><?php echo $final['time'] ?></td>
                                    <td><?php echo $sname ?></td>
                                    <td><?php echo $price ?></td>
                                    <td><?php echo $final['a_status'] ?></td>
                                   

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