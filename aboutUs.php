<?php
session_start();
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>About Us </title>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="image/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="aboutUs.css">
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
  <section id="AboutUs">
    <div class="container">


          <h2 align="center">Digital Heath Care System(DHS)</h2>
          <p><h3>DHS refers to Digitalized Hospital System. DHS is a private website currently owned by "X hospitals Ltd". Here in DHS, we serve you in any emergency situation or condition of yours . And make every service possible to make you feel better at the earliest times. Feeling sick ? We are here for you !</h3></p>

          <p><h3>This website ensures that every user gets proper service and treatment whenever the patients seeks help from DHS. So, as a matter of fact, this website is open 24/7.</h3></p>

    <h2 align="center">Meet Our Founders!</h2>
     <div class="column">
     <img src="image/on6.jpeg" alt="Urbana Musharrat Haider" style="width:90%">
   <h4 align="center"><p>Name:Urbana Musharrat Haider</p>
             <p>Id:180041110</p></h4>
       </div>
          <div class="column">
             <img src="image/on5.jpeg" alt="Morsalina " style="width:90%">
                <h4 align="center"><p>Name:Morsalina</p>
                 <p>Id:180041103</p></h4>
           </div>
         <div class="column">
            <img src="image/on4.jpeg" alt="Onamika Hossain" style="width:90%">
            <h4 align="center"><p>Name:Onamika Hossain</p>
                    <p>Id:180041102</p>
            </h4>
           </div>
     </div>
      </section>
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
