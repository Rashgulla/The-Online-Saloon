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

                $id = $_GET['service_id'];
                $sql = "SELECT * FROM services WHERE sid='$id'";

                $results = $conn->query($sql);
                $final = $results->fetch_assoc();
                ?>

                <h3>ID : <?php echo $final['sid'] ?></h3>
                <hr><br>
                <h3>Service : <?php echo $final['service'] ?></h3>
                <hr><br>
                <h3>Price : <?php echo $final['price'].'Rs.' ?></h3>
                <hr><br>
                <h3>Description : <?php echo $final['description'] ?></h3>

            </div>
        </div>
    </section>
</div>