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

if(isset($_POST['submit'])){
  $patient_name = $_POST['uname'];
  $problem = $_POST['prblm'];

  $sql = "INSERT INTO covid VALUES('NULL','$patient_id','$patient_name','$patient_email','$patient_phn','$problem')";
  if(mysqli_query($conn, $sql)){
    $_SESSION['success'] =true;
    header('Location: homepagePatient.php');
  }
  else{
    $_SESSION['err'] = true;
    header('Location : getCovidTreatment.php');
  }
}




 ?>
