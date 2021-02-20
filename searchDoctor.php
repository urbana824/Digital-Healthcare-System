<?php
session_start();
     $conn = mysqli_connect('localhost','root','','hospital_management_system');
     $sql= "SELECT * FROM register;";
     $result = mysqli_query($conn, $sql);

     if(!isset($_SESSION['user_login'])){
       header("Location:index.php");
     }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Searching a specialist</title>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="image/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="searchDoctor.css">
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
       <li> <a href="myAccountPatient.php"> <span class="glyphicon glyphicon-user"></span> My account </a> </li>
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
          <li> <a id="option2" href="homepagePatient.php">Describe your problem</a> </li>
          <li> <a id="option2" href="showDoctorList.php">Doctor's list</a> </li>
          <li> <a id="option2" href="getCovidTreatment.php">Get Covid-19 Treatment</a> </li>
          <li> <a id="option3" href="manageAppointmentPatient.php">Make Appointment</a> </li>
          <li> <a id="option5" href="videoConfaPatient.php">Video Conference</a> </li>
          <li> <a id="option1" href="totalExpense.php">See your expenses</a> </li>
          <li> <a id="option1" href="medicineAndprescription.php">Request Medicine delivery</a> </li>
        </ul>
      </div>
      <div class="col-md-9">
           <h4>Enter the name of the specialist you are searching for:</h4>
           <form class="form-inline" action="" method="post">
              <div class="form-group">
                <label></label>
                <input id="sp" type="text" class="form-control" name="Specialist" placeholder="Enter the Specialist name">
              </div>
            <input type="submit" name="search" class="btn btn-info" value="Search">
            </form>
              <br>
            <table class="table table-hover table-bordered">
              <tr>
              <th>Name </th>
              <th>Mobile</th>
              <th>Email</th>
              <th>specialist_on</th>
              <th>Degrees</th>
              <th>Fees(Taka)</th>
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
                              <td> <?php echo $row['name'] ?> </td>
                              <td><?php echo $row['phone'] ?></td>
                              <td><?php echo $row['email'] ?></td>
                              <td><?php echo $row['specialist'] ?></td>
                              <td><?php echo $row['degree'] ?></td>
                              <td><?php echo $row['fees'] ?></td>
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
