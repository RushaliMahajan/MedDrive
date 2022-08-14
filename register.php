<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(isset($_POST['save'])){
    

    $id = $_POST['id'];
    $DriverName = $_POST['DriverName'];
    $VehiclesTitle = $_POST['VehiclesTitle'];
    $VehiclesBrand = $_POST['VehiclesBrand'];
    $VehiclesOverview  = $_POST['VehiclesOverview'];
    $PricePerDay = $_POST['PricePerDay'];
    $FuelType = $_POST['FuelType'];
    $ModelYear = $_POST['ModelYear'];
    $SeatingCapacity = $_POST['SeatingCapacity'];
    $AirConditioner = $_POST['AirConditioner'];
    $PowerDoorLocks = $_POST['PowerDoorLocks'];
    $AntiLockBrakingSystem = $_POST['AntiLockBrakingSystem'];
    $BrakeAssist = $_POST['BrakeAssist'];
    $PowerSteering = $_POST['PowerSteering'];
    $DriverAirbag = $_POST['DriverAirbag'];
    $PassengerAirbag = $_POST['PassengerAirbag'];
    $PowerWindows   = $_POST['PowerWindows'];
    
    $sql = "INSERT INTO newvehicles (`id`,`DriverName`,`VehiclesTitle`,`VehiclesBrand`,`VehiclesOverview`,`PricePerDay`,`FuelType`,`ModelYear`,`SeatingCapacity`,`AirConditioner`,`PowerDoorLocks`,`AntiLockBrakingSystem`,`BrakeAssist`,`PowerSteering`,`DriverAirbag`,`PassengerAirbag`,`PowerWindows`)
   VALUES ('$id','$VehiclesTitle',' $VehiclesBrand','$VehiclesOverview','$PricePerDay','$FuelType','$ModelYear','$SeatingCapacity','$AirConditioner','$PowerDoorLocks','$AntiLockBrakingSystem','$BrakeAssist','$PowerSteering','$DriverAirbag','$PassengerAirbag','$PowerWindows')";
    $query = $dbh->prepare($sql);
    $query->execute();


    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>24x7 Ambulance Booking | MedDrive Services</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
    <link rel="stylesheet" href="website/css/bootstrap.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="website/css/swiper.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="website/style.css">
 

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">

<style>
    .xyz{
        width: 100%;
    position: relative;
    top: -106px;
    z-index: 0;
    height: 870px;
    
    opacity: 0.5;
    }
    </style>



</head>
<body class="single-page blog-page">
    <header class="site-header">
        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                            <a class="d-block" href="index.php" rel="home"><img class="d-block" style= "border-radius:25px;" src="website/images/logo1.jpeg" alt="logo"></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
                                <li class="current-menu-item"><a href="index.php">Home</a></li>
                                <li><a href="about.php">About us</a></li>
                                <li><a href="car-listing.php">Ambulance</a></li>
                                <li><a href="register.php">Register</a></li>
                                <li><a href="contact-us.php">Contact</a></li>

                                <li class="call-btn button gradient-bg mt-3 mt-md-0">
                                    <a class="d-flex justify-content-center align-items-center" href="#"><img src="website/images/emergency-call.png"> 9876543210</a>
                                </li>
                            </ul>
                        </nav><!-- .site-navigation -->

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
        <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                        <h1>Register</h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-4">
                                        <p>Home/Register</p>
                                    </div><!-- .entry-content -->

                                    <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                
                                    </footer><!-- .entry-footer -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->
        
        <img class="xyz" style="width:100%;"
        src="website/images/reg10.jpg" alt="">
    </header><!-- .site-header -->

    <br></br>
    <div class="ts-main-content">
	
	<div class="content-wrapper container">
		
		<div class="container-fluid">
			
            <div class="row">
				<div class="col-md-12">
				<br>
				<h2 class="page-title">Register Vehicle</h2>

				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default col-md-12">
							<div class="panel-heading">Basic Info</div>
<br>

<form method="post" class="form-horizontal" enctype="multipart/form-data">

  <div class="form-group">
  <label class="col-sm-2 control-label">Driver Name<span style="color:red">*</span></label>
    <div class="col-sm-4">
      <input type="text" name="DriverName" class="form-control" required>
    </div>


    <label class="col-sm-2 control-label">Vehicle Title<span style="color:red">*</span></label>
    <div class="col-sm-4">
      <input type="text" name="VehiclesTitle" class="form-control" required>
    </div>

	
	</div>
											
	<div class="form-group">
		<label class="col-sm-2 control-label">Vehical Overview<span style="color:red">*</span></label>
		<div class="col-sm-4">
		<textarea class="form-control" name="VehiclesOverview" rows="3" required></textarea>
		</div>
		<label class="col-sm-2 control-label">Select Brand<span style="color:red">*</span></label>
      <div class="col-sm-4">
        <select class="selectpicker" name="VehiclesBrand" required>
		<option value=""> Select </option>

		<option value="Maruti">Maruti</option>
	<option value="Toyota">Toyota</option>
	<option value="Nissan">Nissan</option>
	<option value="Honda">Honda</option>
	<option value="Other">Other</option>

	</select>
	</div>
		</div>

		<div class="hr-dashed"></div>

		<div class="form-group">
		<label class="col-sm-2 control-label">Price Per Day<span style="color:red">*</span></label>
		<div class="col-sm-4">
		<input type="text" name="PricePerDay" class="form-control" required>
	</div>
	<label class="col-sm-2 control-label">Select Fuel Type<span style="color:red">*</span></label>
	<div class="col-sm-4">
	<select class="selectpicker" name="FuelType" required>
	<option value=""> Select </option>

	<option value="Petrol">Petrol</option>
	<option value="Diesel">Diesel</option>
	<option value="CNG">CNG</option>
	</select>
	</div>
	</div>


<div class="form-group">
<label class="col-sm-2 control-label">Model Year<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="ModelYear" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Seating Capacity<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="SeatingCapacity" class="form-control" required>
</div>
</div>
<div class="hr-dashed"></div>





<div class="hr-dashed"></div>									
</div>
</div>
</div>
</div>
							

<div class="row ">
<div class="col-md-12">
<div class="panel panel-default col-md-12 ">
<div class="panel-heading">Accessories</div>
<div class="panel-body">


<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="airconditioner" name="AirConditioner" value="1">
<label for="airconditioner"> Air Conditioner </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="powerdoorlocks" name="PowerDoorLocks" value="1">
<label for="powerdoorlocks"> Power Door Locks </label>
</div></div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="antilockbrakingsys" name="AntiLockBrakingSystem" value="1">
<label for="antilockbrakingsys"> AntiLock Braking System </label>
</div></div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="brakeassist" name="BrakeAssist" value="1">
<label for="brakeassist"> Brake Assist </label>
</div>
</div>



<div class="form-group">

<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="powersteering" name="PowerSteering" value="1">
<label for="inlineCheckbox5"> Power Steering </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="driverairbag" name="DriverAirbag" value="1">
<label for="driverairbag">Driver Airbag</label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="passengerairbag" name="PassengerAirbag" value="1">
<label for="passengerairbag"> Passenger Airbag </label>
</div></div>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="powerwindow" name="PowerWindows" value="1">
<label for="powerwindow"> Power Windows </label>
</div>

</div>



</div>
</div>
<br></br>
<div class="form-group">
<div class="col-sm-8 col-sm-offset-2 text-center">
<button class="btn btn-default" type="reset">Cancel</button>
<input class="btn btn-danger" name="save" type="submit" id="save" value="Save Changes"/>
</div>
</div>



</form>


									</div>
								</div>
							</div>
						</div>
						
					

					</div>
				</div>
				
			

			</div>
		</div>
	</div>

   
<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

    <script type='text/javascript' src='website/js/jquery.js'></script>
    <script type='text/javascript' src='website/js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='website/js/swiper.min.js'></script>
    <script type='text/javascript' src='website/js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='website/js/circle-progress.min.js'></script>
    <script type='text/javascript' src='website/js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='website/js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='website/js/custom.js'></script>
</body>
</html>
