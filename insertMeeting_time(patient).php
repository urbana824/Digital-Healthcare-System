<?php

session_start();
if(!isset($_SESSION['user_login'])){
  header("Location:index.php");
}
$session_user = $_SESSION['user_login'];
$conn = mysqli_connect('localhost','root','','hospital_management_system');
$sql= "SELECT * FROM register WHERE Email='$session_user'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$patient_id = $row['id'];
$patient_email = $row['Email'];
$patient_phn = $row['Phone_number'];
$patient_name = $row['Name'];
if(isset($_POST['submit'])){

  $specialist_name = $_POST['doctor1'];
  $specialist_name2 = $_POST['doctor2'];
  $fixed_time = $_POST['fixed_time'];
  $prefer_time = $_POST['prefer_time'];

  $sql = "INSERT INTO meeting VALUES('NULL','$patient_id','$patient_name','$patient_email','$patient_phn','$specialist_name','$specialist_name2','$fixed_time', '$prefer_time' ,NOW())";
  if(mysqli_query($conn, $sql)){
    $_SESSION['suc'] = true;
    header('Location: homepagePatient.php');
  }
  else{
    $_SESSION['er'] = true;
    header('Location : manageAppointmentPatient.php');
  }
}




 ?>
