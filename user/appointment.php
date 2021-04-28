<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">TheOnlineSaloon</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Saloon</a>
      <a class="nav-item nav-link" href="#">Product</a>
      <a class="nav-item nav-link disabled" href="#"></a>
    </div>
  </div>
</nav>

    <!--Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Appointment</title>

    <link rel="stylesheet" href="../css/Bootstrap.min.css">
    <link rel="stylesheet" href="../css/datepicker.css">
    <link rel="stylesheet" href="../css/appointment.css">


</head>

<body>
    <div class="inner-layer">
        <div class="conatainer">
            <div class="row no-margin">
                <div class="col-sm-7">
                    <div class="content">
                        <h1>The Online Saloon </h1>

                        <img src="../images/logo.jpeg" alt="TOS" width="228" height="228">
                        <p>LET'S MAKE AN APPOINTMENT FOR YOUR LIFE & STYLE</p>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-data">
                        <div class="form-head">
                            <h2>Book Appointment</h2>
                        </div>
                        <div class="form-body">
                            <div class="row form-row">
                                <input type="text" placeholder="Enter Full Name" class="form-control">
                            </div>
                            <div class="row form-row">
                                <input type="text" placeholder="Enter Mobile Number" class="form-control">
                            </div>
                            <div class="row form-row">
                                <input type="text" placeholder="Enter Email Id" class="form-control">
                            </div>
                            <div class="row form-row">
                                <input id="date" placeholder="Appointment date" class="form-control">
                            </div>

                            <h5>Which Services you prefere </h5>
                           
                            <div class="form-check">
                             <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                          <label class="form-check-label" for="flexCheckDefault">
                           Hair cut  
                          </label>
                          </div>
                          <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                          <label class="form-check-label" for="flexCheckChecked">
                           Beard Cut
                           </label>
                          </div>
                          <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                          <label class="form-check-label" for="flexCheckChecked">
                           Hair color
                           </label>
                          </div>
                          <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                          <label class="form-check-label" for="flexCheckChecked">
                           Beard color
                           </label>
                          </div>
                          <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                          <label class="form-check-label" for="flexCheckChecked">
                           Hair Wash
                           </label>
                          </div>
                          <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                          <label class="form-check-label" for="flexCheckChecked">
                           Beard Wash
                           </label>
                          </div>
                          <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                          <label class="form-check-label" for="flexCheckChecked">
                           Face Massage
                           </label>
                          </div>
                          <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                          <label class="form-check-label" for="flexCheckChecked">
                           Face Cleanning   
                           </label>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    
</body>
   


<!-- Optiona1 Javascript -->
<!-- jquery first, then Popper.js, then Bootstrap JS -->
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/Popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap-datepicker.js"></script> 

<script>
    $(document)ready(function() {
        $("#dat").datepicker();
    })
</script>
</body>

</html>