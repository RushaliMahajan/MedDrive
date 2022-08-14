<?php
session_start();
error_reporting(0);
include('includes/config.php');

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

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="website/css/swiper.min.css">

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
                                        <h1>Privacy</h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-4">
                                        <p>Home/Privacy</p>
                                    </div><!-- .entry-content -->

                                    <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                
                                    </footer><!-- .entry-footer -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->

        <img class="xyz" style="width:100%;"
        src="website/images/reg7.jpg" alt="">
    </header><!-- .site-header -->

    <div class="quality-services">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Our Privacy Policy</h2>
<br>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <li>Meddrive is committed to the protection of the information that you may provide to us (“Confidential Information”). We at Meddrive take appropriate security measures to protect such Information against unauthorized access or disclosure.

We restrict access to your Information only to such persons who need to know that information in order to provide services to you.</li>
<li>We collect information about you when you visit our Website and/ or through your physical interaction with our staff. The type of information which we generally collect is your name, address, age, sex or medical report(s)/ history, physical, physiological and mental health condition or any other information as required to provide you desired services.</li>
                            <li>The information collected from you by Meddrive is secured and can be accessed by authorised persons only.

We have implemented adequate security practices and standards with necessary controls commensurate with the information being provided.</li>
                        </div>

                        <div class="col-12 col-md-6">
                        
                            
                            <li>Meddrive may use the information shared by you for the purpose of providing various services offered by the Organisation (Critical Care Air Transfers).</li>
                            <li>We will not disclose any information provided to us by you to any other person unless required for providing you with the desired services or required under the Law, or if the information is already in the public domain. You may choose to not provide any sensitive information to us if you feel and find it to be confidential/sensitive.</li>
                            <li>We never collect bank/credit card information of the Information Provider.</li>
                            <li>You are deemed to have provided your consent to share the information with concerned persons while providing you with the desired services as above. You may withdraw your consent in writing at any time and we shall have the option not to provide the services for which information was provided.</li>
                        
                        </div>
                    </div>
<br>
                    <div class="w-100 text-center mt-5">
                        <a class="button gradient-bg" href="T&C.php">Read More</a>
                    </div>
                </div>
            </div>
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
<!--/Forgot-password-Form --> 


   
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



