<?php
session_start();
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title> Services </title>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="image/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="service.css">
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
      <li><a href="contact.php">Contact</a></li>
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
  <div class="wrapper">
    <h1>Our Services</h1>
    <div class="service">
      <div class="service_number">
        <div class="service_img">
          <img src="image/video-camera.png" alt="Video Conferencing">
        </div>
        <h3>Video Conferencing</h3>
        <p>When it comes to patients' emergency situation , a video conferencing with the doctor really helps a long way.The doctor can determine the patients condition more efficiently.</p>
      </div>
      <div class="service_number">
        <div class="service_img">
          <img src="image/prescription.png" alt="Prescription & Medicine Delivery">
        </div>
        <h3>Prescription & Medicine Delivery</h3>

        <p>After video conferencing doctor provides a prescription and patient can request for medicine home delivery which is intended to be delivered in a very short time.</p>
      </div>
      <div class="service_number">
        <div class="service_img">
          <img src="image/safety-suit.png" alt="Covid-19 Detection & treatment">
        </div>
        <h3>Covid-19 Detection</h3>

        <p>In DHS, if the doctor suspects the patient after checkup, then he requests for covid-19 test and medical officer is sent to the patients home for collecting sample.</p>
      </div>
    </div>
  </div>

</div>

<div class="footer">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <strong>Follow us on</strong> <br>
          <ul class="list-unstyled">
            <li> <a href="https://web.facebook.com/morsalina.kowmi/"> Facebook</a> </li>
            <li> <a href="#"> Twitter</a> </li>
            <li> <a href="#"> Instagram</a> </li>

          </ul>
        </div>

        <div class="col-md-5">
          <strong>contact us </strong> <br>
          +123457 <br>
      </div>
      <div class="col-md-4">
        <ul>
          <li> <a href="FAQ.php"> FAQ </a> </li>
          <li> <a href="#">Send Feedback</a> </li>
        </ul>
      </div>

    </div>
  </div>
</div>
</div>




</body>
</html>
