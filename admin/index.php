<?php
session_start();
include('includes/config.php');
if(isset($_POST['alogin']))
{
$UserName=$_POST['UserName'];
$Password=$_POST['Password'];
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:UserName and Password=:Password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':UserName', $UserName, PDO::PARAM_STR);
$query-> bindParam(':Password', $Password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
	$_SESSION['alogin']=$_POST['UserName'];
	echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";

} else{
  
	echo "<script>alert('Invalid Details');</script>";
	

}

}

?>




<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Login | Meddrive</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./style.css">
<style>
  body {
  
  background: #5B90D6;
background: -webkit-linear-gradient(bottom right, #5B90D6, #137DC4);
background: -moz-linear-gradient(bottom right, #5B90D6, #137DC4);
background: linear-gradient(to top left, #5B90D6, #137DC4);
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  font-family: "Open Sans", sans-serif;
  color: #333333;
}

.box-form {
  margin: 0 auto ;
  width: 70%;
  background: #FFFFFF;
  border-radius: 10px;
  overflow: hidden;
  display: flex;
  flex: 1 1 100%;
  align-items: stretch;
  justify-content: space-between;
  box-shadow: 0 0 20px 6px #090b6f85;
}
@media (max-width: 980px) {
  .box-form {
    flex-flow: wrap;
    text-align: center;
    align-content: center;
    align-items: center;
  }
}
.box-form div {
  height: auto;
}
.box-form .left {
  color: #FFFFFF;
  background-size: cover;
  background-repeat: no-repeat;
  
  overflow: hidden;
}
.box-form .left .overlay {
  padding: 30px;
  width: 100%;
  height: 100%;
  background: #5B90D6;

  overflow: hidden;
  box-sizing: border-box;
}
.box-form .left .overlay h1 {
  font-size: 10vmax;
  line-height: 1;
  font-weight: 900;
  margin-top: 40px;
  margin-bottom: 20px;
}
.box-form .left .overlay span p {
  margin-top: 30px;
  font-weight: 900;
}
.box-form .left .overlay span a {
  background: #3b5998;
  color: #FFFFFF;
  margin-top: 10px;
  padding: 14px 50px;
  border-radius: 100px;
  display: inline-block;
  box-shadow: 0 3px 6px 1px #042d4657;
}
.box-form .left .overlay span a:last-child {
  background: #1dcaff;
  margin-left: 30px;
}
.box-form .right {
  padding: 40px;
  overflow: hidden;
}
@media (max-width: 980px) {
  .box-form .right {
    width: 100%;
  }
}
.box-form .right h5 {
  font-size: 6vmax;
  line-height: 0;
}
.box-form .right p {
  font-size: 14px;
  color: #B0B3B9;
}
.box-form .right .inputs {
  overflow: hidden;
}
.box-form .right input {
  width: 100%;
  padding: 10px;
  margin-top: 25px;
  font-size: 16px;
  border: none;
  outline: none;
  border-bottom: 2px solid #B0B3B9;
}
.box-form .right .remember-me--forget-password {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.box-form .right .remember-me--forget-password input {
  margin: 0;
  margin-right: 7px;
  width: auto;
}
.box-form .right button {
  float: right;
  color: #fff;
  font-size: 16px;
  padding: 12px 35px;
  border-radius: 50px;
  display: inline-block;
  border: 0;
  outline: 0;
  box-shadow: 0px 4px 20px 0px #49c628a6;
  background-image: linear-gradient(135deg, #70F570 10%, #49C628 100%);
}

label {
  display: block;
  position: relative;
  margin-left: 30px;
}

label::before {
  content: ' \f00c';
  position: absolute;
  font-family: FontAwesome;
  background: transparent;
  border: 3px solid #70F570;
  border-radius: 4px;
  color: transparent;
  left: -30px;
  transition: all 0.2s linear;
}

label:hover::before {
  font-family: FontAwesome;
  content: ' \f00c';
  color: #fff;
  cursor: pointer;
  background: #70F570;
}

label:hover::before .text-checkbox {
  background: #70F570;
}

label span.text-checkbox {
  display: inline-block;
  height: auto;
  position: relative;
  cursor: pointer;
  transition: all 0.2s linear;
}

label input[type="checkbox"] {
  display: none;
}
  </style>
</head>
<body>
<!-- partial:index.partial.html -->
</br>
<div class="box-form">
  
  <div class="left">
    <div class="overlay">
    <h1>Med Drive.</h1>
    <p>Meddrive is a user friendly way to request and 
      track ambulances close to you.</p>
    
    </div>
  </div>
  
  
    <div class="right">
    <h5>Login</h5>
    <p>Login to enter the admin portal of Meddrive. Copyrights © Meddrive 2021</p>
    <form method="post">
    <div class="inputs">
      <input type="text" id="" name="UserName" placeholder="user name" required>
      <br>
      <input type="password" id=""  name="Password" placeholder="password" required>
    </div>
      
      <br><br>
      
    
      
      <button name="alogin">Login</button>
</form>
  </div>
  
</div>
<!-- partial -->

</body>
</html>

