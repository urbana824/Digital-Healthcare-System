<?php
session_start();
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>ContactInfo </title>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="image/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="contact1.css">
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="hospital_demo1.html">
        <img src="image/brand.png" alt="Hospital logo" width="40px" height="30px">
      </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="aboutUs.php">About</a></li>
      <li><a href="service.php">Service</a></li>
      <li><a href="help.php">Help</a></li>
      <li><a href="covidInfo.php">Covid-19 Info</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <?php
           if(isset($_SESSION['user_login'])){ ?>
           <li> <a href="myAccountPatient.php"> <span class="glyphicon glyphicon-user"></span> My account </a> </li>
           <li> <a href="logout.php"> <span class="glyphicon glyphicon-log-in"></span> Log out </a>  </li>
          <?php }
          elseif(isset($_SESSION['doctor_login'])){ ?>
            <li> <a href="myAccountDoctor.php"> <span class="glyphicon glyphicon-user"></span> My account </a> </li>
            <li> <a href="logout.php"> <span class="glyphicon glyphicon-log-in"></span> Log out </a>  </li>
           <?php }
           else{ ?>
             <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Sign Up
                <span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li> <a href="signupAsPatient.php">Signup as Patient</a> </li>
                 <li> <a href="signupAsDoctor.php"> Signup as Doctor</a> </li>
               </ul>
             </li>

             <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Login
                <span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li> <a href="loginAsPatient.php">Login as Patient</a> </li>
                 <li> <a href="loginAsDoctor.php">Login as Doctor</a> </li>
               </ul>
             </li>

          <?php }

        ?>

    </ul>
  </div>
</nav>

<div class="main-body">
  <section class="contact">
   <div class="content">
     <h2> Contact Us</h2>
     <p>This is the contact us informationin case of any queries about our services or feedback .Thank you.</p>
   </div>
   <div class="container">
     <div class="contactInfo">
       <div class="box">
       <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
       <div class="text">
         <h3>Address</h3>
         <p>Islamic University of technology<br>Boardbazar<br>Gazipur,Dhaka</p>
       </div>
     </div>
       <div class="box">
       <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
       <div class="text">
         <h3>Phone</h3>
         <p>+880-1559823404<br>+880-1711626600<br>+880-1682500922</p>
       </div>
     </div>
     <div class="box">
       <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
       <div class="text">
         <h3>Email</h3>
         <p>onamika@iut-dhaka.edu<br>morsalina@iut-dhaka.edu<br>
         urbanamusharrat@iut-dhaka.edu</p>
       </div>
     </div>
  </section>
</div>
</body>
</html>
