<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>

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

    <a href="#" class="logo"> <i class="fas fa-shopping-bag"></i>  Products </a>

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
            <li><a href="TheOnlineSaloon\saloon shop.html">shop</a></li>
        
            <li><a href="#gallery">gallery</a></li>
            <li><a href="#deal">deal</a></li>
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



<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="tgb/slide1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="tgb/slide2.jpg
      " class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="tgb/slide1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- home section ends -->

<!-- arrival section starts  -->

<section class="arrival" id="arrival">

<h1 class="heading"> <span>new arrivals</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="image">
            <img src="tgb/charcolfacescrub.jpg" alt="">
        </div>
        <div class="info">
            <h3>Charcol Face Scrub</h3>
            <div class="subInfo">
                <strong class="price"> ₹149/- <span>₹199/-</span> </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
            <a href="wishlist" style="--i:1;" class="fas fa-heart"></a>
            <a href="#" style="--i:2;" class="fas fa-shopping-cart"></a>
            <a href="search" style="--i:3;" class="fas fa-search"></a>
        </div>
    </div>


    <div class="box">
        <div class="image">
            <img src="tgb/strongwax.jpeg" alt="">
        </div>
        <div class="info">
            <h3>Strong Hold Wax</h3>
            <div class="subInfo">
                <strong class="price"> ₹269/- <span>₹375/-</span> </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
            <a href="#" style="--i:1;" class="fas fa-heart"></a>
            <a href="#" style="--i:2;" class="fas fa-shopping-cart"></a>
            <a href="#" style="--i:3;" class="fas fa-search"></a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="tgb/creamwax.jpeg" alt="">
        </div>
        <div class="info">
            <h3>Cream Wax</h3>
            <div class="subInfo">
                <strong class="price"> ₹259/- <span>₹375/-</span> </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
            <a href="#" style="--i:1;" class="fas fa-heart"></a>
            <a href="#" style="--i:2;" class="fas fa-shopping-cart"></a>
            <a href="#" style="--i:3;" class="fas fa-search"></a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="tgb/beardcomb.jpeg" alt="">
        </div>
        <div class="info">
            <h3>Beard Comb</h3>
            <div class="subInfo">
                <strong class="price"> ₹199/- <span>₹250/-</span> </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
            <a href="#" style="--i:1;" class="fas fa-heart"></a>
            <a href="#" style="--i:2;" class="fas fa-shopping-cart"></a>
            <a href="#" style="--i:3;" class="fas fa-search"></a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="tgb/charcolsoap.jpeg" alt="">
        </div>
        <div class="info">
            <h3>Charcol Soap</h3>
            <div class="subInfo">
                <strong class="price"> ₹179/- <span>₹250/-</span> </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
            <a href="#" style="--i:1;" class="fas fa-heart"></a>
            <a href="#" style="--i:2;" class="fas fa-shopping-cart"></a>
            <a href="#" style="--i:3;" class="fas fa-search"></a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="tgb/charcolmask.jpeg" alt="">
        </div>
        <div class="info">
            <h3>Charcol Face Mask</h3>
            <div class="subInfo">
                <strong class="price"> ₹299/- <span>₹350/-</span> </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
            <a href="#" style="--i:1;" class="fas fa-heart"></a>
            <a href="#" style="--i:2;" class="fas fa-shopping-cart"></a>
            <a href="#" style="--i:3;" class="fas fa-search"></a>
        </div>
    </div>

</div>

</section>

<!-- arrival section ends -->

<!-- featured section starts  -->

<section class="feature" id="featured">

<h1 class="heading"> <span> featured product </span> </h1>

<div class="row">

    <div class="image-container">

        <div class="big-image">
            <img src="tgb/b.oil.jpg" alt="">
        </div>

        <div class="small-image">
            <img class="image-active" src="tgb/b.oil2.jpg" alt="">
            <img src="tgb/b.oild.jpg" alt="">
            <img src="tgb/b.oil2.jpg" alt="">
            <img src="tgb/b.oil.jpg" alt="">
        </div>

    </div>

    <div class="content">

        <h3>Beard Growth Oil</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <span>(500+) reviews</span>
        </div>
        <p>Grow Your Beard with tgb Growth Oil</p>
        <strong class="price">₹279 <span>₹350</span> </strong>
        <a href="#"><button class="btn">buy now</button></a>

    </div>

</div>



</section>

<!-- featured section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

<h1 class="heading"> <span> Product gallery </span> </h1>

<ul class="controls">
    <li class="btn button-active" data-filter="all">All</li>
    <li class="btn" data-filter="face">Face</li>
    <li class="btn" data-filter="beard">Beard</li>
    <li class="btn" data-filter="hair">Hair</li>

</ul>

<div class="image-container">

    <div class="box face">
        <div class="image">
            <img src="tgb/detanfw.jpeg" alt="">
        </div>
        <div class="info">
            <h3>De-tan F/W</h3>
            <div class="subInfo">
                <strong class="price">₹250</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="box face">
        <div class="image">
            <img src="tgb/neemfw.jpeg" alt="">
        </div>
        <div class="info">
            <h3>Neem F/W</h3>
            <div class="subInfo">
                <strong class="price">₹250</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="box face">
        <div class="image">
            <img src="tgb/antiacnefw.jpeg" alt="">
        </div>
        <div class="info">
            <h3>Anti Acne F/W</h3>
            <div class="subInfo">
                <strong class="price">₹250</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="box face">
        <div class="image">
            <img src="tgb/washfree.jpeg" alt="">
        </div>
        <div class="info">
            <h3>Wash Free F/W</h3>
            <div class="subInfo">
                <strong class="price">₹350</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="box face">
        <div class="image">
            <img src="tgb/charcolfw.jpeg" alt="">
        </div>
        <div class="info">
            <h3>Charcol F/W</h3>
            <div class="subInfo">
                <strong class="price">250</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="box beard">
        <div class="image">
            <img src="tgb/b.oil.jpg" alt="">
        </div>
        <div class="info">
            <h3>Beard Growth oil</h3>
            <div class="subInfo">
                <strong class="price">₹350</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>  

     <div class="box beard">
        <div class="image">
            <img src="tgb/classicb.oil.jpeg" alt="">
        </div>
        <div class="info">
            <h3>Classic Beard Oil</h3>
            <div class="subInfo">
                <strong class="price">₹450</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>  

    <div class="box hair">
        <div class="image">
            <img src="tgb/classicb.shampoo.jpeg" alt="">
        </div>
        <div class="info">
            <h3>Classic Beard Shampoo</h3>
            <div class="subInfo">
                <strong class="price">₹350</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>  


 <div class="box beard">
        <div class="image">
            <img src="tgb/beardwash.jpeg" alt="">
        </div>
        <div class="info">
            <h3> Beard Wash</h3>
            <div class="subInfo">
                <strong class="price">₹250</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>  


    <div class="box hair">
        <div class="image">
            <img src="tgb/hairseram.jpeg" alt="">
        </div>
        <div class="info">
            <h3>Hair Seram</h3>
            <div class="subInfo">
                <strong class="price">₹250</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>  

    
</div>

</section>

<!-- gallery section ends -->

<!-- deal section starts  -->

<section class="deal" id="deal">

<h1 class="heading"> <span> Best Deal </span> </h1>

<div class="box-container">

    <div class="box">
        <img src="tgb/Classicb.oil.jpeg" alt="">
        <div class="content">
            <h3>latest Product</h3>
            <p>upto 25% off on first purchase</p>
            <a href="#"><button class="btn">explore</button></a>
        </div>
    </div>

    <div class="box">
        <img src="tgb/washfree.jpeg" alt="">
        <div class="content">
            <h3>New Facewash</h3>
            <p>upto 25% off on first purchase</p>
            <a href="#"><button class="btn">explore</button></a>
        </div>
    </div>

</div>

<div class="icons-container">

    <div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <h3>fast delivery</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, molestiae?</p>
    </div>

    <div class="icons">
        <i class="fas fa-user-clock"></i>
        <h3>24 x 7 support</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, molestiae?</p>
    </div>

    <div class="icons">
        <i class="fas fa-money-check-alt"></i>
        <h3>easy payments</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, molestiae?</p>
    </div>

    <div class="icons">
        <i class="fas fa-box"></i>
        <h3>10 days replacements</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, molestiae?</p>
    </div>

</div>

</section>

<!-- deal section ends -->

<!-- newsletter section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <a href="#" class="logo"> <i class="fas fa-shopping-bag"></i>  shopping </a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique expedita molestiae distinctio facere beatae velit, maiores ullam molestias necessitatibus sapiente.</p>
        </div>

        <div class="box">
            <h3>links</h3>
            <a href="#">home</a>
            <a href="#">Book Product</a>
            <a href="#">cart</a>
            
        </div>

        <div class="box">
            <h3>contact us</h3>
            <p> <i class="fas fa-home"></i>
               Ahmedabad, Gujarat
                 India
            <p> <i class="fas fa-phone"></i>
                +918020406070
            </p>
            <p> <i class="fas fa-globe"></i>
                www.TOS@onlinestore.com
            </p>
        </div>

    </div>

<h1 class="credit"> created by ZNS.com <span></span> @2020 all rights reserved by Tos. </h1>

</section>

<!-- footer section ends -->


<!--jquery cdn link-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="js/qwl.carousel.min.js"></script>

<!-- custom js file link  -->
<script src="js/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
</body>
</html>