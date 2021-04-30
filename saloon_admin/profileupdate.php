<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="code.php" method="POST">

                <div class="modal-body">

                    <div class="form-group">
                        <label> E-Mail</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter email address">
                    </div>

                    <div class="form-group">
                        <label> Username </label>
                        <input type="text" name="username" class="form-control" placeholder="Enter Username">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
                    </div>

                    <div class="form-group">
                        <label>Mobile No. </label>
                        <input type="number" name="Mobile No." class="form-control" placeholder="Enter Mobile No.">
                    </div>

                    <div class="form-group">
                        <label> Saloon picture </label>
                        <input type="file" name="picture" class="form-control" placeholder="Chosee Picture">
                    </div>

                    <div class="form-group">
                        <label> Address </label>
                        <input type="text" name="Address" class="form-control" placeholder="Enter Address">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>


<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Update Profile
            </h6>
        </div>

        <div class="container">


            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter new email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername">Username</label>
                        <input type="text" class="form-control" id="exampleInputUsername" placeholder="Enter new username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputMobile">Mobile No.</label>
                        <input type="text" class="form-control" id="exampleInputMobile" placeholder="Enter new mobile number" name="mobile">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername">Address</label>
                        <textarea name="address" class="form-control" id="address" placeholder="Enter new address" cols="30" rows="10"></textarea>
                        <button type="submit" class="btn btn-primary mt-3" name="save">Save</button>
                    </div>
                </div>

        </div>


        <!-- /.box-body -->


        </form>
    </div>



</div>
<!-- /.container-fluid -->

<?php
//include('includes/scripts.php');
include('includes/footer.php');
include('../Home/connect.php');

if(isset($_POST['save'])){
    $username = $_POST['username'];

}

?>