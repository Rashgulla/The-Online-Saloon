<?php
session_start();
if (!isset($_SESSION['email'])) {

    echo "<script>window.open('../Saloon/index.php','_self')</script>";
}
include('includes/header.php');
include('includes/navbar.php');
?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Appointments</h1>

    </div>

    <!-- Content Row -->
    <div class="container">

        <!-- Earnings (Monthly) Card Example -->
        
            <table class="table">
                <thead>
                    <tr>

                        <th scope="col">username</th>
                        <th scope="col">email</th>
                        <th scope="col">mobile no</th>
                        <th scope="col">date</th>
                        <th scope="col">time</th>
                        <th scope="col">service</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <?php
                include('../Home/connect.php');
                $sal_id = $_SESSION['saloon_id'];
               
                $sql = "SELECT * FROM appointments WHERE sal_id='$sal_id' and status='payment_done' and a_status='pending'";
                $results = mysqli_query($conn, $sql);
                while ($final = mysqli_fetch_array($results)) { ?>
                    <tbody>
                        <tr>
                            <td><?php echo $final['uname'] ?></td>
                            <td><?php echo $final['email'] ?></td>
                            <td><?php echo $final['mobile_no'] ?></td>
                            <td><?php echo $final['date'] ?></td>
                            <td><?php echo $final['time'] ?></td>
                            <td><?php echo $final['sname'] ?></td>
                            <td><?php echo $final['status'] ?></td>
                            <td>
                            <a href="handler.php?id=<?php echo $final['id']?>">
                            <button type="submit" name="done" class="btn btn-outline-success">Done</button>
                            </a>
                            </td>

                        </tr>
                    </tbody>



                <?php
                }
                ?>

            </table>     
    </div>

    <?php
    include('includes/scripts.php');
    
    
    ?>