<?php

$name = @trim(stripslashes($_POST["name"])); 
$email = @trim(stripslashes($_POST["email"])); 
$subject = @trim(stripslashes($_POST["subject"])); 
$message = @trim(stripslashes($_POST["message"])); 

$headers = "From: $name <$email> \r\n";
$headers .= "Reply-To: $email \r\n";

echo mail("darrenkeithhoyland@yahoo.co.uk", $subject, $message, $headers);

die;

?>