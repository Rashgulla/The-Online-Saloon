<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE ONLINE SALOON:- PRODUCT</title>

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

            <div class="form-container">
                <form action="">
                    <input type="search" placeholder="search products" id="search" value="" />
                    <label for="search" class="fas fa-search"></label>
                </form>
            </div>

        </div>

        <div class="header-2">

            <div id="menu" class="fas fa-bars"></div>

            <nav class="navbar">
                <ul>
                    <li><a class="active" href="#home">home</a></li>
                    <li><a href="TheOnlineSaloon\saloon shop.html">products</a></li>


                </ul>
            </nav>

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-user"></a>
            </div>

        </div>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->


    <!-- <div class="container">-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div>
                <img src="tgb/slide1.jpg" class="d-block w-100" alt="..." style="height: 500px;">
            </div>

        </div>
    </div>
    <!--</div>-->
    <!-- home section ends -->

    <!-- arrival section starts  -->

    <section class="arrival" id="arrival">

        <h1 class="heading"> <span>PRODUCTS</span> </h1>
        <section class="content">

                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-sm-9">

                        <?php
                        include('../Home/connect.php');

                        $id = $_GET['see_id'];
                        $sql = "SELECT * FROM products WHERE id='$id'";

                        $results = $conn->query($sql);
                        $final = $results->fetch_assoc();
                        ?>

                        <h3><label style="color: red; font-weight:bold;">NAME :</label><br> <?php echo $final['name'] ?></h3>
                        <hr><br>
                        <h3><label style="color: red; font-weight:bold;">PRICE :</label><br> <?php echo $final['price'] ?>Rs.</h3>
                        <hr><br>
                        <h3><label style="color: red; font-weight:bold;">DESCRIPTION :</label><br> <?php echo $final['description'] ?></h3>
                        <hr><br>
                        <img src="../admin/uploads/<?php echo $final['picture']?>" alt="<?php echo $final['picture'] ?>" style="height: 250px; width: 250px;"><br>
                        <button type="button" class="btn btn-success mt-3" style="font-size:18px;">Buy Product</button>
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