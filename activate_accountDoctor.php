<?php
session_start();
$conn = mysqli_connect("localhost","root","","hospital_management_system");

if(isset($_GET['token'])){

  $token = $_GET['token'];

  $updatequery = "UPDATE doctor SET status='active' WHERE token='$token'";
  $result = mysqli_query($conn, $updatequery);

  if($result){
    if(isset($_SESSION['msg'])){
      $_SESSION['msg'] = "Now please log in to continue.....";
        header("Location:loginAsDoctor.php");
    }else {
      $_SESSION['msg'] = "You are logged out..Now please log in to continue.";
        header("Location:loginAsDoctor.php");
      }
    }

    else{
      $_SESSION['msg'] = "Your account was not updated..please register again";
        header("Location:signupAsDoctor.php");
    }
  }

 ?>
