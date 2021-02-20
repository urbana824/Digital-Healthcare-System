<?php
session_start();
     $conn = mysqli_connect('localhost','root','','hospital_management_system');
     if(!isset($_SESSION['user_login'])){
       header("Location:index.php");
     }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Total Expenses </title>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="image/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="showDoctorList.css">
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
      <<li><a href="aboutUs.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="service.php">Service</a></li>
      <li><a href="covidInfo.php">Covid-19 Info</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!-- <li> <a href="showAccout.php"> <span class="glyphicon glyphicon-user"></span> My account </a> </li>-->
       <li> <a href="myAccountPatient.php"> <span class="glyphicon glyphicon-user"></span> My account </a> </li>
       <li> <a href="logout.php"> <span class="glyphicon glyphicon-log-in"></span> Log out </a>  </li>
    </ul>
  </div>
</nav>

<?php

  session_start();
  $session_user = $_SESSION['user_login'];
  $conn = mysqli_connect('localhost','root','','hospital_management_system');
  $sqls= "SELECT * FROM register WHERE Email='$session_user'";
  $results = mysqli_query($conn, $sqls);
  $rows = mysqli_fetch_assoc($results);
  $pid = $rows['id'];

 ?>

<div class="mainbody">
  <div class="container-fluid">
    <div class="row">
      <br><br>
      <div id="sidebar" class="col-md-3 bg-success">
        <ul class="list-unstyled">
          <li> <a id="option1" href="homepagePatient.php">Describe your problem</a> </li>
          <li> <a id="option1" href="searchDoctor.php">Search a specialist</a> </li>
          <li> <a id="option1" href="showDoctorList.php">Doctor's List</a> </li>
          <li> <a id="option1" href="getCovidTreatment.php">Get Covid-19 Treatment</a> </li>
          <li> <a id="option3" href="manageAppointmentPatient.php">Make Appointment</a> </li>
          <li> <a id="option5" href="videoConfaPatient.php">Video Conference</a> </li>
          <li> <a id="option5" href="medicineAndprescription.php">Request Medicine Delivery</a> </li>
        </ul>
      </div>
      <div class="col-md-9 Table">
        <h4>To see the total expenses enter the name of the specialist:</h4>
        <form class="form-inline" action="" method="post">
           <div class="form-group">
             <label></label>
             <input id="sp" type="text" class="form-control" name="Specialist" placeholder="Enter the Specialist name">
           </div>
         <input type="submit" name="search" class="btn btn-info" value="Search">
         </form>
           <br>
        <table class="table table-bordered table-hover table-striped">
          <tr>
          <th>Doctor ID </th>
          <th>Doctor Name</th>
          <th>Doctor Email</th>
          <th>Fees(Taka)</th>
          <th>Total Bill(delivery+fees) taka</th>

        </tr>
          <?php
               $conn = mysqli_connect("localhost","root","","hospital_management_system");

               if(isset($_POST['search']))
               {
                 $specialist = $_POST['Specialist'];

                   $sql = "SELECT * FROM doctor WHERE specialist='$specialist'";
                     $result = mysqli_query($conn, $sql);
                     //$row = mysqli_fetch_assoc($result);
                     $row_count = mysqli_num_rows($result);
                     if($row_count==0){
                       echo "There is no such record";
                     }
                     while($row= mysqli_fetch_assoc($result)){
                        ?>

                        <tr>
                          <td> <?php echo $row['id'] ?> </td>
                          <td><?php echo $row['name'] ?></td>
                          <td><?php echo $row['email'] ?></td>
                          <td><?php echo $row['fees'] ?></td>
                          <td><?php echo $row['fees']+2000 ?></td>

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
