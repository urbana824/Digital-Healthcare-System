<?php
session_start();
if(!isset($_SESSION['doctor_login'])){
  header("Location:index.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Account</title>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="image/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="myAccountPatient.css">
</head>
<body>

  <?php
  session_start();
    $session_user = $_SESSION['doctor_login'];
    $conn = mysqli_connect('localhost','root','','hospital_management_system');
    $sql= "SELECT * FROM doctor WHERE email='$session_user'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
  //  print_r($row);
   ?>

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
          <li> <a id="option1" href="homepageDoctor.php">Homepage</a> </li>
          <li> <a id="option1" href="searchPatient.php">Search specific patient</a> </li>
          <li> <a id="option2" href="showPatientList.php">Patient's list</a> </li>
          <li> <a id="option2" href="covidPatientforDoc.php">Covid-19 Patient</a> </li>
          <li> <a id="option3" href="manageAppointmentDoctor.php">Manage Appointment</a> </li>
          <li> <a id="option5" href="videoConfaDoctor.php">Video Conference</a> </li>
          <li> <a id="option1" href="uploadPrescription.php">Upload pescription</a> </li>
        </ul>
      </div>
      <div class="col-md-9">
        <h3 class="text-center">Personal Info :</h3>
        <br>
        <table class="table table-bordered table-hover">

          <tr>
            <th>Doctor ID :</th>
            <td> <?php echo $row['id'] ?> </td>
          </tr>

          <tr>
            <th>Name :</th>
            <td> <?php echo $row['name'] ?> </td>
          </tr>
          <tr>
            <th>Email :</th>
            <td> <?php echo $row['email'] ?> </td>
          </tr>
          <tr>
            <th>Phone Number :</th>
            <td> <?php echo $row['phone'] ?></td>
          </tr>
          <tr>
            <th>Password :</th>
            <td><?php echo $row['Password'] ?></td>
          </tr>
          <tr>
            <th>Specialist on :</th>
            <td><?php echo $row['specialist'] ?></td>
          </tr>
          <tr>
            <th>Degree(s) :</th>
            <td> <?php echo $row['degree'] ?> </td>
          </tr>
          <tr>
            <th>Fees :</th>
            <td> <?php echo $row['fees'] ?> </td>
          </tr>

        </table>

        <a href="editProfileDoctor.php" class="btn btn-success pull-right">Edit your profile</a>
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
