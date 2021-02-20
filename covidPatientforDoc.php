<?php
session_start();
$conn = mysqli_connect('localhost','root','','hospital_management_system');
$sql= "SELECT * FROM covid ";
$result = mysqli_query($conn, $sql);

     if(!isset($_SESSION['doctor_login'])){
       header("Location:index.php");
     }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Covid Patients </title>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="image/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="covidPatientforDoc.css">
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

<div class="mainbody">
  <div class="container-fluid">
    <div class="row">
      <br><br>
      <div id="sidebar" class="col-md-3 bg-success">
        <ul class="list-unstyled">
            <li> <a id="option2" href="homepageDoctor.php">Homepage</a> </li>
          <li> <a id="option1" href="searchPatient.php">Search specific patient</a> </li>
          <li> <a id="option2" href="showPatientList.php">Patient's list</a> </li>
          <li> <a id="option3" href="manageAppointmentDoctor.php">Manage Appointment</a> </li>
          <li> <a id="option5" href="videoConfaDoctor.php">Video Conference</a> </li>
          <li> <a id="option1" href="uploadPrescription.php">Upload prescription</a> </li>
          <li> <a id="option1" href="seeAllMeetings.php">See all meeting schedules</a> </li>

        </ul>
      </div>
      <div class="col-md-6 lists">
        <div class="listss">
          <table class="table table-bordered table-hover table-striped">
            <thead>
              <tr>
              <th>ID </th>
              <th>Mobile</th>
              <th>Email</th>
              <th>Symptoms</th>
            </tr>
            </thead>
            <tbody>
                <?php while($row= mysqli_fetch_assoc($result)) { ?>
              <tr>
                <td> <?php echo $row['patient_id'] ?> </td>
                <td> <?php echo $row['patient_phn'] ?> </td>
                <td> <?php echo $row['patient_email'] ?> </td>
                <td> <?php echo $row['Problem'] ?> </td>
              </tr>
            <?php }
            ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-3">
        <h1>please check</h1>
        <a href="seeAllMeetings.php">Check for all the meetings</a>
        <br>
        <h3 class="text-danger">If you think anyone is COVID-19 positive, please fill this form:</h3>
        <form action="" method="post">
          <div class="form-group">
            <label id="pid"  for="id">Patient Id:</label>
            <input required type="number" class="form-control" id="name" placeholder="Enter patient's id"   name="id">
          </div>
          <button id="b1" type="submit" name="done" class="btn btn-success">Submit</button>
        </form>
        <?php
            if(isset($_SESSION['message'])){?>
               <div class="alert alert-success " role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Success!</strong> Your informations have  been inserted successfully.
          </div> <?php

            }
             if(isset($_SESSION['wrong'])){?>
                 <div class="alert alert-success " role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Opps !</strong> Something went wrong,please try again...
          </div> <?php
            }
         ?>
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
<?php

     if(isset($_POST['done'])){
       $pid = $_POST['id'];
   $conn = mysqli_connect('localhost','root','','hospital_management_system');
    $sqlquery = "SELECT * FROM register WHERE id='$pid'";
    $res = mysqli_query($conn, $sqlquery);
    $ans = mysqli_fetch_assoc($res);
    $pname = $ans['Name'];
    $page = $ans['Age'];
    $pphn = $ans['Phone_number'];
    $pemail = $ans['Email'];

    $sqlly = "INSERT INTO covidcheck VALUES('NULL','$pid','$pname','$page','$pphn','$pemail')";
    if(mysqli_query($conn, $sqlly)){
      $_SESSION['message'] = true;
      header("Location: covidPatientforDoc.php?success=1");
    }
    else{
      $_SESSION['wrong'] = true;
      header("Location : covidPatientforDoc.php?error=1");
    }
}
 ?>


</body>
</html>
