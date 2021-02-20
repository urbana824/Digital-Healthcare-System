

<?php

$to_email = "12daisyflora12@gmail.com";
$subject = "mail_Checking";
$body = "Hello Vaiya, thank you so much for helping me,accha abar pathalam ";
$headers = "From: komi2us@gmail@gmail.com";

if(mail($to_email,$subject,$body,$headers)){
  echo "Yay";
}
else{
  echo "baal";
}
 ?>
