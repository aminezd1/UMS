<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$to = "amineziadi484@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: UMS.ma";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>