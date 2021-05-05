<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <title>The Online saloon || Appointment Booking</title>
  <link rel="stylesheet" href="appointment.css">
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">

</head>

<body>


  <div class="container">
    <div class="container-time">
      <h2 class="heading">The Online Saloon</h2>
      <h3 class="heading-days">Happy Saloon</h3>
      <p> </p>
      <p></p>

      <h3 class="heading-days"> </h3>
      <p></p>
      <p></p>

      <hr>

      <h4 class="heading-phone"></h4>
    </div>

    <div class="container-form">
      <form method="POST" action="../razorpay/index.php">
        <h2>Book your appointment now</h2>

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
          <p>Date</p>
          <input class="font-weight-bolder" type="date" name="date" required>
        </div>
        <div class="form-field">
          <p>Time</p>
          <input class="font-weight-bolder" type="time" name="time" min="9:00" max="20:00" required>
        </div>
        <br>

        <select class="custom-select" name="service">
          <?php
          include('../Home/connect.php');
          $id = $_GET['id'];
          $sql = "SELECT * FROM services WHERE saloon_id='$id'";
          $results = $conn->query($sql);
          echo $sql;
          while ($final = $results->fetch_assoc()) {
          ?>
            <option name="service" value="<?php echo $final['sid'];
                                          echo $final['service'] . '  ' . (($final['price']) + (($final['price'] * 10) / 100)) . 'Rs.' ?>"><?php echo $final['service'] . ' || ' . (($final['price']) + (($final['price'] * 10) / 100)) . 'Rs' ?></option>


          <?php
          }
          ?>
        </select>

          <input type="text" value="<?php echo $_GET['id']?>" name="sal_id" hidden>
        <button type="submit" class="btn btn-success" name="confirm" style="font-size: 13px;">Confirm</button>

      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

  <script src="appointment.js"></script>

</body>

</html>