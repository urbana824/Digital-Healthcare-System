<?php
session_start();
     $conn = mysqli_connect('localhost','root','','hospital_management_system');
     $sql= "SELECT * FROM register WHERE status='active' ";
     $result = mysqli_query($conn, $sql);

     if(!isset($_SESSION['doctor_login'])){
       header("Location:index.php");
     }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Searching a Patient</title>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="image/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="searchPatient1.css">
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
          <li> <a id="option1" href="homepageDoctor.php">Homepage</a> </li>
          <li> <a id="option2" href="showPatientList.php">Patient's list</a> </li>
          <li> <a id="option2" href="covidPatientforDoc.php">Covid-19 Patient</a> </li>
          <li> <a id="option3" href="manageAppointmentDoctor.php">Manage Appointment</a> </li>
          <li> <a id="option5" href="videoConfaDoctor.php">Video Conference</a> </li>
          <li> <a id="option1" href="uploadPrescription.php">Upload prescription</a> </li>
            <li> <a id="option1" href="seeAllMeetings.php">See all meeting schedules</a> </li>
        </ul>
      </div>
      <div class="col-md-9">
           <h4>Enter the ID number of the patient you are searching for:</h4>
           <form class="form-inline" action="" method="post">
              <div class="form-group">
                <label></label>
                <input id="sp" type="text" class="form-control" name="id" placeholder="Enter the ID number">
              </div>
            <input type="submit" name="search" class="btn btn-info" value="Search">
            </form>
              <br>
            <table class="table table-hover table-bordered Table">
              <tr>
              <th>ID </th>
              <th>Name </th>
              <th>Age </th>
              <th>Mobile</th>
              <th>Email</th>

            </tr>
              <?php
                   $conn = mysqli_connect("localhost","root","","hospital_management_system");

                   if(isset($_POST['search']))
                   {
                     $id = $_POST['id'];

                       $sql = "SELECT * FROM register WHERE id='$id' AND status='active'";
                         $result = mysqli_query($conn, $sql);
                         $row_count = mysqli_num_rows($result);
                         if($row_count==0){
                           echo "There is no such record";
                         }
                         while($row= mysqli_fetch_assoc($result)){
                            ?>

                            <tr>
                              <td> <?php echo $row['id'] ?> </td>
                              <td><?php echo $row['Name'] ?></td>
                              <td><?php echo $row['Age'] ?></td>
                              <td><?php echo $row['Phone_number'] ?></td>
                              <td><?php echo $row['Email'] ?></td>
                            </tr>
                            <?php
                         }

                   }

               ?>

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
