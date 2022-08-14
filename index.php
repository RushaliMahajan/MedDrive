<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>


        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 






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
    <script src="website/js/custom.js"></script>
    
    <style>

     .our-departments-wrap{
       
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      height:fit-content;
      padding: auto;
     }

     .cell{
       background-color:lightblue;
       border-radius:50%;
       padding-top:0px;
     }

     #testimonials{

      margin-top: 90px;
       background-color:#659EC7;
       padding-top:40px;
       color:black;
       text-align:center;
       width:100%;
       height:fit-content;
       padding-bottom:10px;
     
     }
     #testimonial-slider{

      display: flex;

     }


     .testimonial-content{
      
     margin-top:50px;
     width:500px;
     }

     .slideshow-container {
  position: relative;

}

/* Slides */
.mySlides {
  display: none;

  text-align: center;
}

/* Next & previous buttons */
.prev, .next {
  margin-left:100px;
  margin-right:100px;
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color:white;

}

/* The dot/bullet/indicator container */
.dot-container {
  margin-top:10px;
  text-align: center;
  padding: 20px;
  
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}
  
        </style>
</head>
<body>
   

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


   
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="our-departments-wrap">
                        <h2>Our Goals</h2>
<!-- Fun Facts-->


  <div class="container div_zindex">
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-calendar" aria-hidden="true"></i>24 x 7</h2>
            <p>service</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>We are</h2>
            <p>Hiring Drivers</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-commenting-o" aria-hidden="true"></i>Leave </h2>
            <p>Feedbacks</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>100+</h2>
            <p>Satisfied Customers</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  

<!-- /Fun Facts--> 





                    </div>
                </div>
            </div>
        </div>
  

    
   
  <div class="div_zindex" id="testimonials">
    
    <div id="testimonial-head">
      <h2>Our Satisfied Customers</h2>
    </div>

 
      <div id="testimonial-slider" class="slideshow-container">
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<?php 
$tid=1;
$sql = "SELECT tbltestimonial.Testimonial,tblusers.FullName from tbltestimonial join tblusers on tbltestimonial.UserEmail=tblusers.EmailId where tbltestimonial.status=:tid";
$query = $dbh -> prepare($sql);
$query->bindParam(':tid',$tid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  ?>


        <div class="testimonial-m mySlides">
 
          <div class="testimonial-content">
            <div class="testimonial-heading">
              <h5><?php echo htmlentities($result->FullName);?></h5>
            <p><?php echo htmlentities($result->Testimonial);?></p>
          </div>
        </div>

        </div>
        
        <?php }} ?>

        <!-- Next/prev buttons -->
  
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
        
      
  
      </div>

      <div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
</div>
  
   
      
  </div>
  

 

<!-- /Testimonial--> 




      
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

    <script>
      var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
     
    </script>
</body>
</html>