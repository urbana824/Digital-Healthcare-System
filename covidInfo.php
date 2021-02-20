<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Covid Information </title>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="image/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="covidInfo.css">
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
    <div class="row">
      <div class="col-md-7">
        <h2 class="tag-1">What Is Coronavirus?</h2>
        <p class="defination">Coronaviruses are a type of virus. There are many different kinds, and some cause disease. A newly identified coronavirus, SARS-CoV-2, has caused a worldwide pandemic of respiratory illness, called <i>COVID-19</i> .</p>
      </div>
      <div class="col-md-5">
        <img class="corona" src="image/corona.jpg" alt="coronavirus">
      </div>
    </div>
  </div>

<div class="covid">
   <h3 id="firsth2" >What you need to know  </h3>

    <h1>COVID-19</h1>
    <ul>
      <li> <p class="cov">COVID-19 is the disease caused by the new coronavirus that emerged in China in December 2019.</p> </li>

      <li> <p class="cov">COVID-19 symptoms include cough, fever or chills, shortness of breath or difficulty breathing, muscle or body aches, sore throat, new loss of taste or smell, diarrhea, headache, new fatigue, nausea or vomiting and congestion or runny nose. COVID-19 can be severe, and some cases have caused death.</p> </li>

      <li> <p class="cov">The new coronavirus can be spread from person to person. It is diagnosed with a laboratory test.</p> </li>

      <li> <p class="cov">There is no coronavirus vaccine yet. Prevention involves frequent hand-washing, coughing into the bend of your elbow, staying home when you are sick and wearing a cloth face covering if you can't practice physical distancing.</p> </li>
    </ul>

     <h1>How does the new coronavirus spread?</h1> <br>
     <p class="cov">As of now, researchers know that the new coronavirus is spread through droplets released into the air when an infected person coughs or sneezes. The droplets generally do not travel more than a few feet, and they fall to the ground (or onto surfaces) in a few seconds — this is why physical distancing is effective in preventing the spread.</p>

     <h1>How did this new coronavirus spread to humans?</h1>
       <p class="cov">COVID-19 appeared in Wuhan, a city in China, in December 2019. Although health officials are still tracing the exact source of this new coronavirus, early hypotheses thought it may be linked to a seafood market in Wuhan, China. Some people who visited the market developed viral pneumonia caused by the new coronavirus. A study that came out on Jan. 25, 2020, notes that the individual with the first reported case became ill on Dec. 1, 2019, and had no link to the seafood market. Investigations are ongoing as to how this virus originated and spread.
       </p>

       <h1>What are symptoms of COVID-19?</h1>
       <ul>
         <li> <p class="cov">Cough </p> </li>
         <li> <p class="cov">Fever or chills </p> </li>
         <li> <p class="cov">Shortness of breath or difficulty breathing</p> </li>
         <li> <p class="cov">Muscle or body aches</p> </li>
         <li> <p class="cov"> Sore throat</p> </li>
         <li> <p class="cov"> New loss of taste or smell</p> </li>
         <li> <p class="cov"> Diarrhea</p> </li>
         <li> <p class="cov"> Headache</p> </li>
         <li> <p class="cov"> Congestion or runny nose</p> </li>
         <li> <p class="cov"> Nausea or vomiting</p> </li>
         <li> <p class="cov"> New fatigue</p> </li>
       </ul>
       <p class="cov">In rare cases, COVID-19 can lead to severe respiratory problems, kidney failure or death.

        If you have a fever or any kind of respiratory difficulty such as coughing or shortness of breath, call your doctor or a health care provider and explain your symptoms over the phone before going to the doctor’s office, urgent care facility or emergency room. Here are suggestions if you feel sick and are concerned you might have COVID-19.

        If you have a medical emergency such as severe shortness of breath, call 911 and let them know about your symptoms.
      </p>


       <h1>COVID-19 transmission and protective measures</h1>
       <ul>
         <li> <p class="cov"> Clean your hands often</p> </li>
         <li> <p class="cov"> Cough or sneeze in your bent elbow - not your hands!</p> </li>
         <li> <p class="cov"> Avoid touching your eyes, nose and mouth</p> </li>
         <li> <p class="cov"> Limit social gatherings and time spent in crowded places</p> </li>
         <li> <p class="cov"> Avoid close contact with someone who is sick</p> </li>
         <li> <p class="cov"> Clean and disinfect frequently touched objects and surfaces</p> </li>
         <li> <p class="cov">Wear a mask if you are caring for someone who has respiratory symptoms.</p></li>
         <li> <p class="cov"> Clean counters, door knobs, phones and tablets frequently, using disinfectant cleaners or wipes.</p> </li>

       </ul>


      <h1>About Coronaviruses</h1>
      <ol>
        <li> <p class="cov"> Coronaviruses are common in different animals. Rarely, an animal coronavirus can infect humans.</p> </li>
        <li> <p class="cov"> There are many different kinds of coronaviruses. Some of them can cause colds or other mild respiratory (nose, throat, lung) illnesses.</p> </li>
        <li> <p class="cov"> Other coronaviruses can cause more serious diseases, including severe acute respiratory syndrome (SARS) and Middle East respiratory syndrome (MERS).</p> </li>
        <li> <p class="cov"> Coronaviruses are named for their appearance: Under the microscope, the viruses look like they are covered with pointed structures that surround them like a corona, or crown.</p> </li>
      </ol>
   </div>
</div>

<div class="footer">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <strong>Follow us on</strong> <br>
          <ul class="list-unstyled">
            <li> <a href="#"> Facebook</a> </li>
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
