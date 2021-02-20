<?php

session_start();
$conn = mysqli_connect("localhost","root","","hospital_management_system");
if(isset($_POST['request'])){
  $email = $_POST['email'];
  $emailquery = "SELECT * from register WHERE Email='$email'";
  $result = mysqli_query($conn, $emailquery);
  $emailcount = mysqli_num_rows($result);
  if($emailcount){

    $userdata = mysqli_fetch_array($result);
    $name = $userdata['Name'];
    $token = $userdata['token'];

    $subject = "Reset your password";
    $body = "Hello $name, please click this link below to reset your password
    http://localhost/Hospital1/resetPassPatient.php?token=$token";
    $headers = "From : komi2us@gamil.com";

    if(mail($email,$subject,$body,$headers)){
      session_start();
      $_SESSION['msg']="Check your email to reset your password";
      header("Location:loginAsPatient.php");
  }else{
    echo "Email sending fail";
  }
}
else{
  echo "No email matched...sorry !! Please check your email id";
}
}

 ?>
