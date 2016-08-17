<?php

$name = @trim(stripslashes($_POST["name"])); 
$email = @trim(stripslashes($_POST["email"])); 
$subject = @trim(stripslashes($_POST["subject"])); 
$message = @trim(stripslashes($_POST["message"])); 

$headers = "From: $name \r\n";
$headers .= "Reply-To: $email \r\n";

echo mail("darren@dkhoyland.co.uk", $subject, $message, $headers);

die;

?>