<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE ONLINE SALOON || Saloon-details</title>

    <!-- owl carousel css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/pstyle.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="user_home.css">
</head>

<body>

    <!-- header section starts  -->
    <header>
        <div class="header-1">
            <a href="#" class="logo" img src="tgb/logo"> <i class="fas fa-shopping-bag"></i> THE ONLINE SALOON </a>


        </div>

        <div class="header-2">
            <div id="menu" class="fas fa-bars"></div>
            <nav class="navbar">
                <ul>
                    <li><a class="active" href="#home">home</a></li>
                    <li><a href="product.php">products</a></li>
                </ul>
            </nav>
            <div class="icons">

                <a href="userprofile.php" class="fas fa-user"></a>
            </div>

        </div>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->


    <!-- <div class="container">-->
    <!--<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div>
                <img src="tgb/slide1.jpg" class="d-block w-100" alt="..." style="height: 500px;">
            </div>

        </div>
    </div>-->
    <!--</div>-->
    <!-- home section ends -->

    <!-- arrival section starts  -->

    <section class="arrival" id="arrival">


        <section class="content">
            <div class="container-fluid d-flex justify-content-center">
                <!-- Small boxes (Stat box) -->

                <div class="row">
                    <?php
                    include('../Home/connect.php');
                    $id = $_GET['salon_id'];
                    $sql = "SELECT * FROM saloon WHERE id='$id'";
                    $results = $conn->query($sql);
                    while ($final = $results->fetch_assoc()) {
                    ?>
                        <div class="col-sm-12">


                            <img src="../saloon_admin/uploads/<?php echo $final['picture'] ?>" class="mt-4" alt="" style="height: 250px; width: 250px;"><br>
                            <h3><label class="mt-4" style="color: red; font-weight:bold;">Saloon Name :</label><?php echo $final['username'] ?><br> </h3>
                            <hr><br>
                            <h3 class="text-lowercase"><label class="mt-1" style="color: red; font-weight:bold;">Email :</label><?php echo $final['email'] ?><br> </h3>
                            <hr><br>
                            <h3><label class="mt-1" style="color: red; font-weight:bold;">Mobile No. :</label><?php echo $final['mobile_no'] ?><br> </h3>
                            <hr><br>
                            <h3><label class="mt-1" style="color: red; font-weight:bold;">Address :</label><?php echo $final['address'] ?><br> </h3>
                            <hr><br>
                            <h3><label class="mt-1" style="color: red; font-weight:bold;">Services :</label> </h3>

                            <?php
                            $sql2 = "SELECT * FROM services WHERE saloon_id='$id'";
                            $results2 = mysqli_query($conn, $sql2);

                            ?>
                            <table class="table">
                                <thead>
                                    <tr>

                                        <th scope="col">Service</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Description</th>
                                    </tr>
                                </thead>

                                <?php
                                while ($final2 = mysqli_fetch_array($results2)) {


                                ?>
                                    <tbody>
                                        <tr>


                                            <td><?php echo $final2['service'] ?></td>
                                            <td><?php echo $final2['price'] ?></td>
                                            <td><?php echo $final2['description'] ?></td>
                                        </tr>
                                    </tbody>
                                <?php
                                }
                                ?>
                            </table>

                            <a href="appointment.php?id=<?php echo $id ?>">
                                <button type="button" id="saloon_id" value="<?php echo $final['saloon_id'] ?>" class="btn btn-success" style="font-size: 13px;">Get Appointment</button>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
        </div>









    </section>

    <!-- arrival section ends -->






    <!--jquery cdn link-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="js/qwl.carousel.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="user_home.js"></script>

</body>

</html>