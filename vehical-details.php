<?php 
session_start();
include('includes/config.php');
error_reporting(0);
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
    <link rel="stylesheet" href="assets/maps/map.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="website/css/swiper.min.css">

    <link href="https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.css" rel="stylesheet">
<link href="/maps/map.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.js"></script>
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css" type="text/css">
<!-- geocoder -->
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.css" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="website/style.css">
    <style>
    .xyz{
        width: 100%;
    position: relative;
    top: -106px;
    z-index: 0;
    height: 800px;
    
    opacity: 0.5;
    }
    </style>
</head>
<body class="single-page">
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
                                    <a class="d-flex justify-content-center align-items-center" href="#"><img src="website/images/emergency-call.png"> +34 586 778 8892</a>
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
                                        <h1>Book Ambulance</h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-4">
                                        <p>Home/Book Ambulance</p>
                                    </div><!-- .entry-content -->

                                    <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                
                                    </footer><!-- .entry-footer -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->

        <img class="xyz" style="width:100%;"
        src="website/images/reg4.jpg" alt="">
    </header><!-- .site-header -->

    <div class="quality-services">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <h2>Book Your Ambulance</h2>

                    <div class="row">
                        <div class="col-12 col-md-4">
                        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-envelope" aria-hidden="true"></i>Book Now</h5>
          </div>
          <form method="post">
          <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="NAME" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="email" placeholder="EMAIL" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="address" placeholder="PICK UP ADDRESS" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="phone" placeholder="PHONE NUMBER" required>
            </div>

            <div class="text-center">
           
             <div class="form-group btn btn-xL uppercase">
              <input class="btn btn-danger" id="myButton" name="book" class="btn btn-xl uppercase " type="submit" value="BOOK NOW"/>
            </div>
            </div>
            </form>
        </div>
        </div>
      
      
        <div class="col-12 col-md-6">
        <div class="col-md-8">
      <div class="contain">  
        <div class="map-container">
            <div>
            <iframe src="mapbox.html" height="430" width="800" title="Iframe Example"></iframe>
            </div>
        </div>    
    </div>
              </div>
                        </div>
                    </div>
      
    
              

        
      <!--/Side-Bar--> 

      
      <script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "https://rzp.io/l/vCedAHIjtC";
    };
</script>

      <?php
      if(isset($_POST['book']))
        {    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $address = $_POST['address'];
     $phone = $_POST['phone'];
     $sql = "INSERT INTO booked (NAME,EMAIL,ADDRESS,PHONE)
     VALUES ('$name','$email','$address','$phone')";
      $query = $dbh->prepare($sql);
      $query->execute();
      }
?>
    </div>

    
    
  </div>
</section>



                </div>
            </div>
        </div>
    
    
   
    <!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 



<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>

    <script type='text/javascript' src='website/js/jquery.js'></script>
    <script type='text/javascript' src='website/js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='website/website/js/swiper.min.js'></script>
    <script type='text/javascript' src='website/js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='website/js/circle-progress.min.js'></script>
    <script type='text/javascript' src='website/js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='website/js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='website/js/custom.js'></script>
</body>
</html>