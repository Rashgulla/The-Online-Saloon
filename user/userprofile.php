<?php
session_start();
if (!isset($_SESSION['email'])) {

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
                        <h3><?php echo $_SESSION['username'] ?></h3>
                    </a>

                </div>
            </div>
        </div>

        <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>

        <ul class="nav flex-column bg-white mb-0">
            <li class="nav-item">
                <a href="user_home.php" class="nav-link text-warning bg-dark">
                    <i class="fa fa-home mr-3 text-danger fa-fw"></i>
                    home
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-warning bg-dark">
                    <i class="fa fa-address-card mr-3 text-danger fa-fw"></i>
                    about
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-warning bg-dark">
                    <i class="fa fa-cubes mr-3 text-danger fa-fw"></i>
                    products
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-warning bg-dark">
                    <i class="fa fa-pencil-square mr-3 text-danger fa-fw"></i>
                    Appointment
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
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../images/shop1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Appointment</h5>
                        <p>Now book your appointment by sitting there.</p>
                        <button class="btn btn-success">Get Appointment</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../images/shop2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Products</h5>
                        <p>Get our products online</p>
                        <button class="btn btn-danger">Products</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../images/shop3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Register your shop</h5>
                        <p>Register your shop to get online customers at your shop</p>
                        <button class="btn btn-light">Register shop</button>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>

        <div class="container mt-3" style="text-align: center;">

            <h3>Username : <?php echo $_SESSION['username'] ?></h3><br>
            <hr>
            <h3>Email : <?php echo $_SESSION['email']; ?></h3><br>
            <hr>

            
  



        </div>
        <!-- End demo content -->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="user_home.js"></script>
</body>

</html>