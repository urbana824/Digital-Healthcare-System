
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign up page</title>
    <link rel="icon" type="image/png" href="image/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="signupAsDoctor.css">
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
          <li><a href="help.php">Help</a></li>
          <li><a href="covidInfo.php">Covid-19 Info</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
           <li> <a href="loginAsDoctor.php"> <span class="glyphicon glyphicon-log-in"></span> Login </a>  </li>
        </ul>
      </div>
    </nav>

     <div class="text2">
        <h1>Sign up </h1>
     </div>
     <?php if(isset($_GET['error'])) {?>
         <div id="alert2">
           <div class="alert alert-warning">
             <strong>Email </strong> already exists,please try with another email id....
           </div>
         </div>
       <?php } ?>

    <div class="sign">
      <form action="insertDoctorInfo.php" method="POST">
        <div class="form-group">
          <label id="name1" for="name">Name:</label>
          <input required type="text" class="form-control" name="name" placeholder="Enter name"   name="username">
        </div>
        <div class="form-group">
          <label id="phn" for="phoneNumber">Phone Number:</label>
          <input required type="number" class="form-control" name="phn_no" placeholder="Phone number"   name="userphn">
        </div>
         <div class="form-group">
             <label id="em1" for="email">Email:</label>
            <input required type="email" class="form-control" name="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
           <label id="pass1" for="pwd">Password:</label>
                <input required type="password" class="form-control" name="pwd" placeholder="Enter password" name="pwd">
        </div>
        <div class="form-group">
          <label id="age1" for="specialist">Specialist:</label>
          <input required type="text" class="form-control" name="specialist" placeholder="Specialist on">
        </div>
        <div class="form-group">
          <label id="age1" for="degree">Degree:</label>
          <input required type="text" class="form-control" name="degree" placeholder="Enter degree">
        </div>
        <div class="form-group">
          <label id="age1" for="fees">Fees:</label>
          <input required type="number" class="form-control" name="fees" placeholder="Enter your fees amount">
        </div>

     <button id="bttn" type="submit" class="btn btn-success">Submit</button>
    </form>
    </div>

    <div class="text1">
       <p id="p1"> already have an account?  <a id="a1" href="loginAsDoctor.php">login</a> </p>
    </div>

  </body>
</html>
