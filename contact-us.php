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
$msg="We will contact you shortly";
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
    top: -97px;
    z-index: 1;
    height:800px;
    
    opacity: 0.5;
    }
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
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
                                        <h1>Contact Us</h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-4">
                                        <p>Home/Contact Us</p>
                                    </div><!-- .entry-content -->

                                    <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                
                                    </footer><!-- .entry-footer -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->
        
        <img class="xyz" style="width:100%;"
        src="website/images/11.jpg" alt="">
    </header><!-- .site-header -->

    <div class="contact-page-short-boxes">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-info h-100">
                        <h2 class="d-flex align-items-center">Contact Info</h2>
                        <?php 
$pagetype=$_GET['type'];
$sql = "SELECT Address,EmailId,ContactNo from tblcontactusinfo";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
                        <ul class="p-0 m-0">
                            <li><span>Addtress:</span><?php   echo htmlentities($result->Address); ?></li>
                            <li><span>Phone:</span><a href="tel:61-1234-567-90"><?php   echo htmlentities($result->ContactNo); ?></a></li>
                            <li><span>Email:</span><a href="mailto:contact@exampleurl.com"><?php   echo htmlentities($result->EmailId); ?></a></li>
                        </ul>
                        <?php }} ?>
                    </div>
                </div>

                
                <div class="col-md-6 ">
                    <div class="emergency-box h-100">
                        <h2 class="d-flex align-items-center">Emergency</h2>

                        <div class="call-btn text-center">
                            <a class="d-flex justify-content-center align-items-center button gradient-bg" href="#"><img src="website/images/emergency-call.png"> 9876543210</a>
                        </div>

                        <p>You can contact on this number at the time of emergency. This number is active 24/7.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Get in Touch</h2>
                </div>
                <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
        <form method="post">
                <div class="col-12">
                    <input type="text" name="fullname" placeholder="Name" id="fullname" required>
                </div><!-- col-4 -->

                <div class="col-12">
                    <input type="email" name="email" placeholder="E-mail" id="emailaddress" required >
                </div><!-- col-6 -->

                <div class="col-12 " >
                    <input type="text" name="contactno" placeholder="Phone No." id="phonenumber" required >
                </div>

                <div class="col-12">
                    <textarea  name="message" cols="80" rows="12" placeholder="Message" required></textarea>
                </div>

                <div class="col-12">
                    <input type="submit" name="send" type="submit" value="Send Message" class="button gradient-bg">
                </div>
</form>
            </div><!-- row -->
        </div>
    </div><!-- contact-form -->




    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-page-map">
                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=delhi&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div><!-- map -->
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
    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
</body>
</html>







      
      












