<?php

use function PHPSTORM_META\elementType;

session_start();
include('includes/header.php');
include('includes/navbar.php');
?>


<!-- Begin Page Content -->
<div class="container">
             <!-- Main content -->
             <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-sm-9">

                        <?php
                        include('../Home/connect.php');
                        $sno=0;
                        $id=$_SESSION['id'];
                        $sql = "SELECT * FROM services WHERE saloon_id='$id'";

                        $results = $conn->query($sql);
                        while ($final = $results->fetch_assoc()) {$sno+=1; ?>
                            <h3><?php echo $sno.')';?>
                            <a href="servicedetail.php?service_id=<?php echo $final['sid'] ?>">
                            <?php echo $final['service'] ?>: <?php echo $final['sid'] ?><br>
                            </a></h3>

                            <a href="serviceupdate.php?up_id=<?php echo $final['sid'] ?>">
                                <button type="button" name="update" class="btn btn-warning">Update</button>
                            </a>

                            <a href="servicedelete.php?del_id=<?php echo $final['sid'] ?>">
                                <button type="button" name="delete" class="btn btn-danger">Delete</button>
                            </a>
                            <hr>

                        <?php
                        }
                        ?>

                    </div>
                </div>
            </section>
</div>

