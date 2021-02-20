<?php
session_start();

 $name = $_POST['name'];
 $phn_no = $_POST['phn_no'];
 $email = $_POST['email'];
 $pwd = $_POST['pwd'];
 $specialist = $_POST['specialist'];
 $degree = $_POST['degree'];
 $fees = $_POST['fees'];

 $token = bin2hex(random_bytes(8));
 $conn = mysqli_connect("localhost","root","","hospital_management_system");

$emailquery = "SELECT * from doctor WHERE email='$email'";
$query = mysqli_query($conn, $emailquery);
$emailcount = mysqli_num_rows($query);
if($emailcount>0){
  session_start();
  $_SESSION['error']=true;
  header("Location:signupAsDoctor.php?error=1");
 }
else{

 $sql = "INSERT INTO doctor VALUES('NULL','$name','$phn_no','$email','$pwd','$specialist','$degree','$fees','$token','inactive')";
 if(mysqli_query($conn, $sql)){

   $subject = "Email Verification";
   $body = "Hello $name sir/maam, thank you for registering... please click this link below to activate your account
   http://localhost/Hospital1/activate_accountDoctor.php?token=$token";
   $headers = "From : komi2us@gamil.com";

   if(mail($email,$subject,$body,$headers)){
     session_start();
     $_SESSION['msg']="Check your email to activate your account";
     header("Location:loginAsDoctor.php");
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
