<?php
session_start();

 $name = $_POST['name'];
 $age = $_POST['age'];
 $phn_no = $_POST['phn_no'];
 $email = $_POST['email'];
 $pwd = $_POST['pwd'];
 $token = bin2hex(random_bytes(8));
 $conn = mysqli_connect("localhost","root","","hospital_management_system");

$emailquery = "SELECT * from register WHERE Email='$email'";
$query = mysqli_query($conn, $emailquery);
$emailcount = mysqli_num_rows($query);
if($emailcount>0){
  session_start();
  $_SESSION['error']=true;
  header("Location:signupAsPatient.php?error=1");
 }
else{

 $sql = "INSERT INTO register VALUES('NULL','$name','$age','$phn_no','$email','$pwd','$token','inactive')";
 if(mysqli_query($conn, $sql)){

   $subject = "Email Verification";
   $body = "Hello $name, thank you for registering... please click this link below to activate your account
   http://localhost/Hospital1/activate_account.php?token=$token";
   $headers = "From : komi2us@gamil.com";

   if(mail($email,$subject,$body,$headers)){
     session_start();
     $_SESSION['msg']="Check your email to activate your account";
     header("Location:loginAsPatient.php");
   }
   else{
     echo "baal";
   }
 }
 //else {
   //header("Location:registerpage.php");
// }
}
 ?>
