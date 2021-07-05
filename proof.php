<?php
session_start();

$dog_name = "Rio";
$owner = "test";
$email = "riorose19@gmail.com";
$attachment = $_POST['get-photo'];

require_once('PHPMailer_5.2.4/class.phpmailer.php');

try {
   $mail = new PHPMailer(true); 

   $body             = "Attached is a pedigree book photo of " .$dog_name;
   $body             = preg_replace('/\\\\/','', $body); 

   $mail->IsSMTP(); 
   $mail->SMTPAuth   = true; 
   $mail->Port       = 25; 
   $mail->Host       = "smtp.gmail.com"; 
   $mail->Username   = "blazyoongi@gmail.com"; 
   $mail->Password   = "09174721574";

   $mail->IsSendmail(); 

   $mail->AddReplyTo("$email","$owner");

   $mail->From       = "$email";
   $mail->FromName   = "$owner";

   $to = "myaddy@mac.com";

   $mail->AddAddress($to);

   $mail->Subject  = "2020 pedigree book photo for " .$dog_name;

   $mail->WordWrap   = 80;

   $mail->MsgHTML($body);

   $mail->IsHTML(true); // send as HTML
   
   $mail->AddAttachment = $attachment;

   $mail->Send();
}

   ?>
   
 