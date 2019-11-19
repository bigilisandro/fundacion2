<?php
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$phone = $_POST['subject'];
if(isset( $_POST['phone']))
$phone = $_POST['phone'];


$content="From: $name \n Email: $email \n Message: $message \n Phone: $phone";
$recipient = "bigilisandro@gmail.com";
$subject = "envio de correo";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>