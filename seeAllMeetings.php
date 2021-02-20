<?php
session_start();
     $conn = mysqli_connect('localhost','root','','hospital_management_system');
     $session_user = $_SESSION['doctor_login'];
     $sql1= "SELECT * FROM doctor WHERE email='$session_user'";
     $result1 = mysqli_query($conn, $sql1);
     $row1 = mysqli_fetch_assoc($result1);
    //  print_r($row);
     $specialist_name=$row1['name'];

     $sql= "SELECT * FROM meeting WHERE specialist_name='$specialist_name' OR specialist_name2='$specialist_name' ";
     $result = mysqli_query($conn, $sql);

     if(!isset($_SESSION['doctor_login'])){
       header("Location:index.php");
     }
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>All meeting lists</title>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="image/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="seeAllMeetings.css">
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
      <li><a href="index.php">Home</a></li>
      <li><a href="aboutUs.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="service.php">Service</a></li>
      <li><a href="covidInfo.php">Covid-19 Info</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!-- <li> <a href="showAccout.php"> <span class="glyphicon glyphicon-user"></span> My account </a> </li>-->
      <li> <a href="myAccountDoctor.php"> <span class="glyphicon glyphicon-user"></span> My account </a> </li>
       <li> <a href="logout.php"> <span class="glyphicon glyphicon-log-in"></span> Log out </a>  </li>
    </ul>
  </div>
</nav>

<div class="mainbody">
  <div class="container-fluid">
    <div class="row">
      <br><br>
      <div id="sidebar" class="col-md-3 bg-success">
        <ul class="list-unstyled">
          <li> <a id="option2" href="homepageDoctor.php">Homepage</a> </li>
          <li> <a id="option1" href="searchPatient.php">Search specific patient</a> </li>
          <li> <a id="option1" href="showPatientList.php">Patient's list</a> </li>
          <li> <a id="option2" href="covidPatientforDoc.php">Covid-19 Patient</a> </li>
          <li> <a id="option3" href="manageAppointmentDoctor.php">Manage Appointment</a> </li>
          <li> <a id="option5" href="videoConfaDoctor.php">Video Conference</a> </li>
          <li> <a id="option1" href="uploadPrescription.php">Upload pescription</a> </li>

        </ul>
      </div>
      <div class="col-md-9 Table">
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <tr>
            <th>ID </th>
            <th>Name </th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Fixed_time</th>
            <th>Preferable_time</th>
            <th>Sumbitted_time</th>
          </tr>
          </thead>
          <tbody>
              <?php while($row= mysqli_fetch_array($result)) { ?>
            <tr>
              <td> <?php echo $row['patient_id'] ?> </td>
              <td><?php echo $row['patient_name'] ?></td>
              <td><?php echo $row['patient_email'] ?></td>
              <td><?php echo $row['patient_phn'] ?></td>
              <td><?php echo $row['fixed_time'] ?></td>
              <td><?php echo $row['prefarable_time'] ?></td>
              <td><?php echo $row['submit_time'] ?></td>

            </tr>
          <?php } ?>
          </tbody>
        </table>
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
