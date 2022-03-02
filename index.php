<?php
ECHO "ojas";
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "gprateek0402@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: webevolve01@gmail.com" . "\r\n" .
"CC: ojas.palorkar@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
// redirect
header("Location:thankyou.html");
?>