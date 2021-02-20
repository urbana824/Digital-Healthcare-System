<?php
session_start();
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Help  </title>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="image/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="help.css">
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
  <div class="container">
    <h1>Sign-Up,Make Account Process & Reset Password</h1>
    <div class="row">
      <div class="col">
        <div class="feature-img">
        <img src="image/question.jpg" width="100%">
      </div>
      </div>
      <div class="col">
        <div class="small-img-row">
        <div class="small-img">
          <img src="image/signup.jpeg">
          <img src="image/play.png" class="play-btn" onclick="playVideo('image/signup.mp4')">
        </div>
        <p>How to sign up in the website<br> and make account</p>
      </div>
      <div class="small-img-row">
        <div class="small-img">
          <img src="image/pass1.jpeg">
          <img src="image/play.png" class="play-btn" onclick="playVideo('image/reset.mp4')">
        </div>
        <p>How to reset Password and verify with Email</p>
      </div>
  </div>
 </div>
 </div>

 <div class="video-player" id="videoPlayer">
  <video width="100%" controls id="myVideo">
    <source src="image/signup.mp4">
  </video>
  <img src="image/close.png" class="close-btn" onclick="stopVideo()">
 </div>
 <script>
  var videoPlayer=document.getElementById("videoPlayer");
  var myVideo=document.getElementById("myVideo");

  function stopVideo(){
    videoPlayer.style.display="none";
  }

  function playVideo(file){
    myVideo.src=file;
    videoPlayer.style.display="block";
  }
 </script>
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
