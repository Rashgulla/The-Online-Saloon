<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Te Online saloon || Appointment Booking</title>
  <link rel="stylesheet" href="appointment.css">
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>


  <div class="container">
    <div class="container-time">
      <h2 class="heading">The Online Saloon</h2>
      <h3 class="heading-days">Book Your Appointment</h3>
      <p>Monday-Sunday </p>
      <p>11am - 10pm (Any style any time)</p>

      <h3 class="heading-days">Saturday </h3>
      <p>Week off</p>
      <p>Make your style with our saloon</p>

      <hr>

      <h4 class="heading-phone">Call Us: (123) 12-34-567</h4>
    </div>

    <div class="container-form">
      <form action="#">
        <h2 class="heading heading-yellow">Booking Online</h2>


        <div class="form-field">
          <p>Your Name</p>
          <input type="text" placeholder="Your Name">
        </div>
        <div class="form-field">
          <p>Your email</p>
          <input type="email" placeholder="Your email">
        </div>
        <div class="form-field">
          <p>Your Mobile no.</p>
          <input type="number" placeholder="Your Mobile no.">
        </div>
        <div class="form-field">
          <p>Date</p>
          <input type="date">
        </div>
        <div class="form-field">
          <p>Time</p>
          <input type="time">
        </div>
        <br/>

        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="button-group">
                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox" />&nbsp;Hair cut</a></li>
                  <li><a href="#" class="small" data-value="option2" tabIndex="-1"><input type="checkbox" />&nbsp;Hair Wash</a></li>
                  <li><a href="#" class="small" data-value="option3" tabIndex="-1"><input type="checkbox" />&nbsp;Hair color</a></li>
                  <li><a href="#" class="small" data-value="option4" tabIndex="-1"><input type="checkbox" />&nbsp;Beard set</a></li>
                  <li><a href="#" class="small" data-value="option5" tabIndex="-1"><input type="checkbox" />&nbsp;Beard color</a></li>
                  <li><a href="#" class="small" data-value="option6" tabIndex="-1"><input type="checkbox" />&nbsp;Face massage</a></li>
                  <li><a href="#" class="small" data-value="option6" tabIndex="-1"><input type="checkbox" />&nbsp;Cleanning</a></li>
                  <li><a href="#" class="small" data-value="option6" tabIndex="-1"><input type="checkbox" />&nbsp;Faceail</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <button class="btn">Submit</button>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="appointment.js"></script>
</body>

</html>