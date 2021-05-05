<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <title>The Online saloon || Product Buying</title>
  <link rel="stylesheet" href="appointment.css">
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">

</head>

<body>


  <div class="container">
    <div class="container-time">
      <h2 class="heading">The Online Saloon</h2>
      <h3 class="heading-days"></h3>
      <p> </p>
      <p></p>

      <h3 class="heading-days"> </h3>
      <p></p>
      <p></p>

      <hr>

      <h4 class="heading-phone"></h4>
    </div>

    <div class="container-form">
      <form method="POST" action="../admin/razorpay/index.php">
        <?php
        include('../Home/connect.php');
        $pid = $_GET['id'];
        $sql = "SELECT * FROM products WHERE id='$pid'";
        $results = mysqli_query($conn, $sql);
        while ($final = mysqli_fetch_array($results)) {
          $pname=$final['name'];
          $price=$final['price'];
        }

        ?>
        <h2>Buy Your Product Now</h2>
        <div class="form-field">
          <p>Product Name</p>
          <input class="font-weight-bolder" value="<?php echo $pname?>" type="text" name="pname" readonly>
        </div>
        <div class="form-field">
          <p>Price</p>
          <input class="font-weight-bolder" value="<?php echo $price?>" type="text" name="price" readonly>
        </div>
        <div class="form-field">
          <p>Your Name</p>
          <input class="font-weight-bolder" type="text" placeholder="Your Name" name="name" required>
        </div>
        <div class="form-field">
          <p>Your email</p>
          <input class="font-weight-bolder" type="email" placeholder="Your email" name="email" required>
        </div>
        <div class="form-field">
          <p>Your Mobile no.</p>
          <input class="font-weight-bolder" type="number" placeholder="Your Mobile no." name="mobile_no" required>
        </div>
        <div class="form-field">
          <p>Address</p>
          <textarea class="font-weight-bolder" name="address" id="address" cols="30" rows="10" required></textarea>
        </div>
        <div class="form-field">
          
          <input class="font-weight-bolder" type="time" name="time" value="<?php echo date('h:i:s')?>" hidden>
        </div>
        <div class="form-field">
          
          <input class="font-weight-bolder" type="date" name="date" value="<?php echo date('Y-m-d')?>" hidden>
        </div>
        <br>



        <input type="text" value="<?php echo $_GET['id'] ?>" name="pid" hidden>
        <button type="submit" class="btn btn-success" name="buynow" style="font-size: 13px;">Buy Now</button>

      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

  <script src="appointment.js"></script>

</body>

</html>