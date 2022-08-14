<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['send']))
  {
$name=$_POST['fullname'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$message=$_POST['message'];
$sql="INSERT INTO  tblcontactusquery(name,EmailId,ContactNumber,Message) VALUES(:name,:email,:contactno,:message)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':contactno',$contactno,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Query Sent. We will contact you shortly";
}
else 
{
$error="Something went wrong. Please try again";
}

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
    height:800px;
    
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
                                        <h1>About Us</h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-4">
                                        <p>Home/About Us</p>
                                    </div><!-- .entry-content -->

                                    <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                
                                    </footer><!-- .entry-footer -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->

        <img class="xyz" style="width:100%;"
        src="website/images/reg1.jpg" alt="">
    </header><!-- .site-header -->

    <div class="med-history">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12">
                    <h2>MedDrive History</h2>

                    <p>Have you ever needed assistance but not known how and where to look for ambulances? Have you had to go through the pain and loss of family and friends due to this unknown? We at Medulance, refused to let this problem be treated as an act of god anymore and decided to make finding an ambulance as easy as finding food or taxis these days.
Hence, Medulance was born, to assist lives. Using simple location based mapping, we seek to provide Delhi with quality ambulances, easier and faster than before.</p>

                    
                </div>

                <div class="col-12 ">
                    <img1 class="responsive" style= "border-radius:25px;"src="website/images/history.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="faq-stuff">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Faq & Stuff</h2>
                </div>

                <div class="col-12 col-lg-6 mb-5 mb-lg-0">
                    <div class="accordion-wrap type-accordion">
                        <h3 class="entry-title d-flex justify-content-between align-items-center active">Is this a 24/7 service? <span class="arrow-r"></span></h3>

                        <div class="entry-content">
                            <p>Yes, our call centre is operational 24/7/365</p>
                        </div>

                        <h3 class="entry-title d-flex justify-content-between align-items-center">Looking at the COVID situation, what all precautions you’re taking? <span class="arrow-r"></span></h3>

                        <div class="entry-content">
                            <p>Our ambulances are sanitized before and after every trip, PPE kits are worn by staff at all times, and payment mode is digital- cashless</p>
                        </div>

                        <h3 class="entry-title d-flex justify-content-between align-items-center">How can I make payment to you and do you accept cash?<span class="arrow-r"></span></h3>

                        <div class="entry-content">
                            <p>You can make a payment through digital mechanism such as google pay, paytm, UPI, Net banking or cash. Digital payment is preferred.</p>
                        </div>
                        <h3 class="entry-title d-flex justify-content-between align-items-center">What all types of ambulances do you provide?<span class="arrow-r"></span></h3>

                         <div class="entry-content">
                            <p>We provide basic life support, advanced cardiac life support, Paediatric, Hearse van, train ambulance &amp; Air ambulance.</p>
                      </div>
                      <h3 class="entry-title d-flex justify-content-between align-items-center">Can you arrange the bed in the nearest hospital?<span class="arrow-r"></span></h3>

                          <div class="entry-content">
                             <p>Yes we will try to support as much as possible for our members.</p>
                      </div>


                    </div>
                </div>

                <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="professional-box">
                                <h2 class="d-flex align-items-center">Our Goal</h2>

                                <img src="images/cardiogram-2.png" alt="">

                                <p> Our We strive to provide high-quality, clean ambulances at competitive prices within minutes, assisting the every day superheroes to reach the patients faster with the help of an easy and simple format. </p>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="quality-box">
                                <h2 class="d-flex align-items-center">Mission and Values</h2>

                                <img src="images/hospital.png" alt="">

                                <p>Our mission is to inspire breakthroughs in the way India looks at ambulances and first point medical attentions, and to touch lives. Our values serve as a compass for our actions and describe how we behave in the world.</p>
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
