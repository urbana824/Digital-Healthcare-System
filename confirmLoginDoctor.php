<?php


$email = $_POST['email'];
$pass = $_POST['pwd'];

$conn = mysqli_connect("localhost","root","","hospital_management_system");
$sql = "SELECT * FROM doctor WHERE email='$email' AND Password='$pass' AND status='active'";
$result = mysqli_query($conn, $sql);

$rowcount = mysqli_num_rows($result);

if($rowcount==1){
  session_start();
  $_SESSION['doctor_login'] = $email;
  header("Location:homepageDoctor.php?success=1");
}
else{
  session_start();
  $_SESSION['error']=true;
  header("Location:loginAsDoctor.php?error=1");
}



 ?>
