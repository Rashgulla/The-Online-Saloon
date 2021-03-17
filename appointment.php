<!DOCTYPE html>
<html lang="en">
<head>
	 <!--Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Appointment</title>
     
     <link rel="stylesheet" href="C:/xampp11/htdocs/TheOnlineSaloon/css/Bootstrap.min.css">
     <link rel="stylesheet" href="C:/xampp11/htdocs/TheOnlineSaloon/css/datepicker.css">
     <link rel="stylesheet" href="C:/xampp11/htdocs/TheOnlineSaloon/css/appointment.css">
      
    
</head>
<body>
    <div class="inner-layer">
        <div class="conatainer">
            <div class="row no-margin">
                   <div class="col-sm-7">
                    <div class="content">
                    	<h1>The Online Saloon </h1> 
                 	      <img src="C:\xampp11\htdocs\TheOnlineSaloon\images\logo.jpeg" alt="TOS"   width="228" height="228">
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
                            		      <input id="dat" placeholder="Appointment date" class="form-control">
                                </div>

                                <h5>Which Services you prefere </h5>

                                     <div class="row form-row">
                            		 
                            		   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
									   </div>
									</div> 
                                <div class="row form-row">
                            	 	<button type="submit" name="appointment"  class="btn btn-success btn-appointment" value="submit"> 
                            	 		get appointment
                            	 	</button>
                                </div>                          

                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="copyrights">
			<div class="container">
				<div class="footer-distributed">
					<div class="footer-left">
						<p class="footer-links">
							<a href="#">Home</a>
							<a href="#">Pricing</a>
							<a href="#">About</a>
							<a href="#">Contact</a>
						</p>
						<p class="footer-company-name">All Rights Reserved. &copy; 2020 <a href="#">The Online Saloon</p>
					</div>
				</div>
			</div><!-- end container -->
		</div><!-- end copyrights -->
	</div>

</body>
        
         <!-- Optiona1 Javascript -->
          <!-- jquery first, then Popper.js, then Bootstrap JS -->
          <script src="C:/xampp11/htdocs/TheOnlineSaloon/js/jquery-3.3.1.min.js"></script> 
          <script src="C:/xampp11/htdocs/TheOnlineSaloon/js/Popper.min.js"></script>
          <script src="C:/xampp11/htdocs/TheOnlineSaloon/js/bootstrap.min.js"></script>
          <script src="C:/xampp11/htdocs/TheOnlineSaloon/js/bootstrap-datepicker.js" ></script>

          <script>
          	$(document).ready(function(){
                $("#dat").datepicker();  

          	})

          </script>
	</body>
</html>	