<?php


$email = $_POST['email'];
$pass = $_POST['pwd'];

$conn = mysqli_connect("localhost","root","","hospital_management_system");
$sql = "SELECT * FROM register WHERE Email='$email' AND Password='$pass' AND status='active'";
$result = mysqli_query($conn, $sql);

$rowcount = mysqli_num_rows($result);

if($rowcount==1){
  session_start();
  $_SESSION['user_login'] = $email;
  header("Location:homepagePatient.php?success=1");
}
else{
  session_start();
  $_SESSION['error']=true;
  header("Location:loginAsPatient.php?error=1");
}



 ?>
