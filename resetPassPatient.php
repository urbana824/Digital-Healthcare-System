<?php
session_start();
$conn = mysqli_connect("localhost","root","","hospital_management_system");

if(isset($_POST['reset-pass'])){

    if(isset($_GET['token'])){
      $token = $_GET['token'];
    }

  $newpassword = $_POST['pwd'];

  $updatequery = "UPDATE register SET Password='$newpassword' WHERE token='$token' ";
  $result = mysqli_query($conn, $updatequery);
  if($result){
     echo $_SESSION['msg']="Your password has been updated,please login again to continue...";
     header("Location:loginAsPatient.php");
  }
  else{
    $_SESSION['err']="Your password was not updated";
     header("Location:resetPassPatient.php");
  }
}
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reset your password</title>
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
      <p id="msg">Fill out this form with your new password....</p>
      <p> <?php
           if(isset($_SESSION['err'])){
             echo $_SESSION['err'];
           }
           else{
             $_SESSION['err']="";
           }
      ?> </p>
    </div>
      <div class="login">
        <form action="" method="post">
          <div class="form-group">
             <label id="em" for="password">New Password:</label>
                  <input required type="password" class="form-control" id="email" placeholder="Enter new password" name="pwd">
          </div>
       <button id="b1" type="submit" class="btn btn-success" name="reset-pass">Reset Password</button>
      </form>
    </div>
  </body>
</html>
