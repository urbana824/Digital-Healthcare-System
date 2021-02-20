<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login process</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="image/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="loginAsPatient.css">
  </head>
  <body>
    <div class="text">
      <h3>Log in</h3>
    </div>
    <div>

        <p class="bg-success"> <?php
             if(isset($_SESSION['msg'])){
               echo $_SESSION['msg'];
             }
             else{
               echo $_SESSION['msg']="You are logged out,please login again...";
             }

          ?> </p>

    </div>
    <?php if(isset($_GET['error'])) {?>
        <div id="alert1">
          <div class="alert alert-warning">
            <strong>Email or password</strong> doesn't match...
          </div>
        </div>
      <?php } ?>


      <div class="login">
        <form action="confirmLoginPatient.php" method="post">
          <div class="form-group">
            <label id="name1"  for="name">Email:</label>
            <input required type="email" class="form-control" id="name" placeholder="Enter your email"   name="email">
          </div>
          <div class="form-group">
             <label id="pass" for="pwd">Password:</label>
                  <input required type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
          </div>

       <button id="b1" type="submit" class="btn btn-success">login</button>
      </form>
      </div>

      <div class="forgot">
           <a href="emailVarforPassPatient.php">forgot your password?</a> <br>
           <p>Don't have an account? <a href="signupAsPatient.php">Sign up</a> </p>
      </div>
  </body>
</html>
