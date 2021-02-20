<?php
session_start();
$conn = mysqli_connect("localhost","root","","hospital_management_system");
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Email recovary</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="image/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="emailVarforPassPatient.css">
  </head>
  <body>
    <div>
      <h3  class="text">Reset your password</h3>
      <p id="msg">An email will be sent to you with instruction how to reset your password..</p>
    </div>
      <div class="login">
        <form action="resetReqPassPatient.php" method="post">
          <div class="form-group">
             <label id="em" for="email">Email:</label>
                  <input required type="email" class="form-control" id="email" placeholder="Enter your emai" name="email">
          </div>
       <button id="b1" type="submit" class="btn btn-success" name="request">Reset-Request-Submit</button>
      </form>
    </div>
  </body>
</html>
