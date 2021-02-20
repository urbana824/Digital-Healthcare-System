<?php
session_start();
     $conn = mysqli_connect('localhost','root','','hospital_management_system');

     if(!isset($_SESSION['doctor_login'])){
       header("Location:index.php");
     }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Video Conferences </title>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="image/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="videoConfaDoctor.css">
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
       <li> <a href="myAccountDoctor.php"> <span class="glyphicon glyphicon-user"></span> My account </a> </li>
       <li> <a href="logout.php"> <span class="glyphicon glyphicon-log-in"></span> Log out </a>  </li>
    </ul>
  </div>
</nav>

<?php
$session_user = $_SESSION['doctor_login'];
$conn = mysqli_connect('localhost','root','','hospital_management_system');
$sql= "SELECT * FROM doctor WHERE email='$session_user'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$doctor_id = $row['id'];
$doctor_name = $row['name'];
$doctor_email = $row['email'];

if(isset($_POST['submit'])){
    $patient_id = $_POST['id'];
    $patient_email = $_POST['email'];
    $link = $_POST['link'];
    $sqlquery = "INSERT INTO videoconference VALUES('NULL','$doctor_id','$doctor_name','$doctor_email','$patient_id', '$patient_email', '$link')";
    if(mysqli_query($conn, $sqlquery)){
      $_SESSION['tres']=true;
      header("Location:VideoConfaDoctor.php?success=1");
    }
    else{
      $_SESSION['e']=true;
      header("Location : VideoConfaDoctor.php ");
    }

}

 ?>

<div class="mainbody">
  <div class="container-fluid">
    <div class="row">
      <br><br>
      <div id="sidebar" class="col-md-4 bg-success">
        <ul class="list-unstyled">
          <li> <a id="option1" href="homepageDoctor.php">Homepage</a> </li>
          <li> <a id="option1" href="searchPatient.php">Search specific patient</a> </li>
          <li> <a id="option2" href="showPatientList.php">Patient's list</a> </li>
          <li> <a id="option2" href="covidPatientforDoc.php">Covid-19 Patient</a> </li>
          <li> <a id="option3" href="manageAppointmentDoctor.php">Manage Appointment</a> </li>
          <li> <a id="option1" href="uploadPrescription.php">Upload prescription</a> </li>
          <li> <a id="option1" href="seeAllMeetings.php">See all meeting schedules</a> </li>

        </ul>
      </div>
      <div class="col-md-8 bg-info">
        <?php
             if(isset($_SESSION['tres'])){
              ?>  <div class="alert alert-success " role="alert">
            <strong>Success!</strong> Your informations have  been inserted successfully.
          </div> <?php
            }
            else{
              echo "<div class='alert alert-info alert-dismissible' role='alert'>

            <strong>Please write down every informations ....</strong>
          </div>";
        }?>
        <div class="sign">
          <form action="" method="POST">
            <div class="form-group">
              <label id="id" for="patient_id">Patient ID:</label>
              <input required type="number" class="form-control" name="id" placeholder="Enter patient id">
            </div>
             <div class="form-group">
                 <label id="em1" for="email"> Patient Email:</label>
                <input required type="email" class="form-control" name="email" placeholder="Enter patient email">
            </div>
            <h3 class="text-info">Please Share the conference link below </h3>
            <textarea name="link" class="form-control" rows="11"></textarea>
            <button id="bttn" type="submit" name="submit" class="btn btn-success">Submit</button>
          </form>
          </div>
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
