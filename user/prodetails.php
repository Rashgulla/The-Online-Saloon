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



    <div class="mt-5">

        <div class="col-sm-5">
            <img src="tgb/slide1.jpg" alt="..." style="height: 300px; width: 300px;">
        </div>
        <div class="col-sm-5 mt-4">
        <h3>Name :</h3>
        <hr><br>
        <h3>Price :</h3>
        <hr><br>
        <h3>Description :</h3>
        <hr><br>
        </div>

    </div>
    </section>

    <!-- arrival section ends -->






    <!--jquery cdn link-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="js/qwl.carousel.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>