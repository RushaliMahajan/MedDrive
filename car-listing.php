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
                            <a class="d-block" href="index.php" rel="home"><img class="d-block" style= "border-radius:25px;" src="website/images/logo1.jpeg"alt="logo"></a>
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
                                        <h1>Ambulances</h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-4">
                                        <p>Home/Ambulances</p>
                                    </div><!-- .entry-content -->

                                    <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                
                                    </footer><!-- .entry-footer -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->

        <img class="xyz" style="width:100%;"
        src="website/images/reg8.jpg" alt="">
    </header><!-- .site-header -->

   
<br></br>
    <div class="container">
        <div class="row">
            <div class="col-12">
               
                    <h2><i class="fa fa-filter" aria-hidden="true"></i>Find your Ambulance</h2>
                    <section class="listing-page">
  <div class="container table-responsive">
    
  <?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];

    if($valueToSearch=="ALL"){

      $query = "SELECT * FROM `list`";
    $search_result = filterTable($query);

    }

    else{

      $query = "SELECT * FROM `list` WHERE `LOCATION` = '$valueToSearch' ";
      $search_result = filterTable($query);

    }
    
}

 else {
    $query = "SELECT * FROM `list`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "minor");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
     
      <!--Side-Bar-->
     
          
          <div class="sidebar_filter">
            <form action="car-listing.php" method="post">
                <div class="row">
                    <div class="col-md-8">
              
                <select class="form-control" name="valueToSearch">
                  <option>SELECT</option>
                  <option>ALL </option>
                  <option>DELHI</option>
                  <option>CHANDIGARH</option>
                  <option>UTTAR PRADESH</option>
                  <option>KERALA</option>
                  <option>MUMBAI</option>
                  <option>GOA</option>
                  <option>GURUGRAM</option>
                  <option>NOIDA</option>
                 
                </select>
              </div>
              
             
              <div class="col-md-4">
                <button type="submit" class="call-btn button gradient-bg" name='search'><i class="fa fa-search" aria-hidden="true"></i> Search</button>
              </div>
            </div>
            </form>
            </div>
<br>
        
      <!--/Side-Bar--> 
            
      <table class="table table-striped table-hover text-center">
        <thead style="text-align:center">
          <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PHONE</th>
            <th>COST</th>
            <th>TYPE OF SERVICE</th>
            <th>LOCATION</th>
            <th>AVAILABLE</th>
            <th>ACTION</th>
          </tr>
        </thead>

    
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['NAME'];?></td>
                    <td><?php echo $row['PHONE'];?></td>
                    <td><?php echo $row['COST'];?></td>
                    <td><?php echo $row['SERVICE'];?></td>
                    <td><?php echo $row['LOCATION'];?></td>
                    <td><?php 
                     if(strcmp($row['status'],"1")==0){
                        echo "YES";
                     }
                      else
                        echo "NO";
                      

                     ?></td>
                   
                    <td>
              <a href="vehical-details.php" class="gradient-bg" id="booknow">BOOK NOW</a>
              
            </td>
                </tr>
                
                <?php endwhile;?>
            </table>
            <br>
        </form>
    </div>
  </div>
</section>
<!-- /Listing--> 

                    
                </div>
            </div>
        </div>
    </div>
<br></br>
   
    
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
    <script type='text/javascript' src='website/js/swiper.min.js'></script>
    <script type='text/javascript' src='website/js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='website/js/circle-progress.min.js'></script>
    <script type='text/javascript' src='website/js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='website/js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='website/js/custom.js'></script>
</body>
</html>





