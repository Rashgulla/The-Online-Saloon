<?php
session_start();
if (!isset($_SESSION['email'])) {
    include('../Home/connect.php');
    echo "<script>window.open('../Home/index.php','_self')</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>User home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="user_home.css">
</head>

<body>

    <!-- Vertical navbar -->
    <div class="vertical-nav bg-dark" id="sidebar">
        <div class="py-4 px-3 mb-4 bg-dark">
            <div class="media d-flex align-items-center">
                <img loading="lazy" src="../images/profile2.jpg" alt="..." width="80" height="80" class="mr-3 rounded-circle img-thumbnail shadow-sm">
                <div class="media-body">

                    <a href="userprofile.php" style="text-decoration: none; color:white;">
                        <h3>Profile</h3>
                    </a>

                </div>
            </div>
        </div>

        <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>

        <ul class="nav flex-column bg-white mb-0">
            <li class="nav-item">
                <a href="user_home.php" class="nav-link text-warning bg-dark">
                    <i class="fa fa-home mr-3 text-danger fa-fw"></i>
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-warning bg-dark">
                    <i class="fa fa-address-card mr-3 text-danger fa-fw"></i>
                    About
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-warning bg-dark">
                    <i class="fa fa-cubes mr-3 text-danger fa-fw"></i>
                    Products
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-warning bg-dark">
                    <i class="fa fa-pencil-square mr-3 text-danger fa-fw"></i>
                    Saloons
                </a>
            </li>
            <li class="nav-item">
                <a href="myappointments.php" class="nav-link text-warning bg-dark">
                    <i class="fa fa-pencil-square mr-3 text-danger fa-fw"></i>
                   My Appointments
                </a>
            </li>
            <li class="nav-item">
                <a href="myorders.php" class="nav-link text-warning bg-dark">
                    <i class="fa fa-pencil-square mr-3 text-danger fa-fw"></i>
                   My Orders
                </a>
            </li>
        </ul>

        <ul class="nav flex-column bg-white mb-0">
            <li class="nav-item">
                <a href="../Home/user_logout.php" class="nav-link text-warning bg-dark">
                    <i class="fa fa-arrow-right mr-3 text-danger fa-fw"></i>
                    sign out
                </a>
            </li>

        </ul>
    </div>
    <!-- End vertical navbar -->



    <!-- Page content holder -->
    <div class="page-content p-5" id="content">
        <!-- Toggle button -->
        <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menu</small></button>

        <!--slider-->

            <div class="container">
                
            </div>




        </div>

        <div class="container mt-3" style="text-align: center;">

        <?php
            //global $conn;
            include('../Home/connect.php');
            $email=$_SESSION['email'];
            $sql="SELECT * FROM users WHERE email='$email'";
            
            $results=mysqli_query($conn,$sql);
            
            if($results){
                $rowcount=mysqli_num_rows($results);
                if($rowcount>0){
                    while($row=mysqli_fetch_array($results)){
                        $mail=$row['email'];
                        $name=$row['username'];
                        $phone=$row['mobile_no'];
                        $add=$row['address'];
                        echo "<h3><label>Mail</label> : $mail</h3><hr>";
                        echo "<h3><label>Username</label> : $name</h3><hr>";
                        echo "<h3><label>Phone No</label> : $phone</h3><hr>";
                        echo "<h3><label>Address</label> : $add</h3><hr>";
                        
                    }
                }
            }

        ?>

            
  



        </div>
        <!-- End demo content -->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="user_home.js"></script>
</body>

</html>