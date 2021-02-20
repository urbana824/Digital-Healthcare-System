<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Frequently asked questions section </title>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="image/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="FAQ.css">
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
      <li><a href="covidInfo.php">Covid-19 info</a></li>
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
      <!-- <li> <a href="registerpage.php"> <span class="glyphicon glyphicon-user"></span> Sign Up </a> </li>
       <li> <a href="loginpage.php"> <span class="glyphicon glyphicon-log-in"></span> Login </a>  </li>
     -->
    </ul>
  </div>
</nav>

<div class="main-body">
  <div class="head">
    <h1 id="ttl" class="text-center">There are some frequently asked questions that might help you...</h1>
  </div>
<br>
  <div class="bdy">
    <h4 class="qstn"> 1.Can I use this system without having an account? </h4>
    <p> <p class="ans"> Answer : No, You can not use our system without having having an account..We need to store your information so that you can receive every facility that is provided by us. </p> </p>
<br>
    <h4 class="qstn"> 2.How can I contact with doctors? </h4>
    <p> <p class="ans"> Answer : You first need to describe your problem then find a suitable time for having a meeting with your desired specialist, after this you can communicate with him via video or audio conference as per your wish. </p> </p>
<br>
    <h4 class="qstn"> 3. What if the doctor is busy at that time?</h4>
    <p> <p class="ans"> Answer : You first need to fix a meeting time which is suitable to you as well as doctors...Incase if the doctor is busy then you will be notified and another meeting will be arranged. </p> </p>
<br>
<h4 class="qstn"> 4. What is the payment system?</h4>
<p> <p class="ans"> Answer : You have pay total amount which is consists of doctor's fees , delivery      charge and medicine bill.You can pay through Bkash using Bkash number given in <b>Contact Us</b> </p> </p>
<br>

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

          <li> <a href="#">Send Feedback</a> </li>
        </ul>
      </div>

    </div>
  </div>
</div>
</div>




</body>
</html>
