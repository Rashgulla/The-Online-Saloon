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
            <form role="form">
                <div class="box-body">
                    <div class="form-group">
                        <label for="service">Service Name</label>
                        <input type="text" class="form-control" id="service" placeholder="Enter Service" name="service">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <textarea name="description" class="form-control" placeholder="Enter Desciption" id="description" cols="30" rows="10"></textarea>
                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Add service</button>
                </div>
            </form>
        </div>

    </div>
</div>





<?php
include('includes/scripts.php');

?>