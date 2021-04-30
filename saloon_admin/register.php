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
      <h6 class="m-0 font-weight-bold text-primary"> Saloon Admin Profile


      </h6>
    </div>

    <div class="card-body">

      <div class="table-responsive">

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>

          </thead>
          <tbody>


            <?php
            //global $conn;
            include('../Home/connect.php');
            $id = $_SESSION['id'];
            $sql = "SELECT * FROM saloon WHERE id='$id'";

            $results = mysqli_query($conn, $sql);

            if ($results) {
              $rowcount = mysqli_num_rows($results);
              if ($rowcount > 0) {
                while ($row = mysqli_fetch_array($results)) {
                  $saloon_id = $row['id'];
                  $mail = $row['email'];
                  $name = $row['username'];
                  $phone = $row['mobile_no'];
                  $add = $row['address'];
                  echo "<h3><label>ID</label> : $saloon_id</h3><hr>";
                  echo "<h3><label>Mail</label> : $mail</h3><hr>";
                  echo "<h3><label>Username</label> : $name</h3><hr>";
                  echo "<h3><label>Phone No</label> : $phone</h3><hr>";
                  echo "<h3><label>Address</label> : $add</h3><hr>";
                }
              }
            }
            ?>

                <form action="proupdate.php" method="post">
                  <input type="hidden" name="edit" value="">
                  
                  <button type="submit" name="edit" class="btn btn-success"> EDIT</button>
                  
                </form>
              

            </tr>
         
          </tbody>
        </table>

      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>