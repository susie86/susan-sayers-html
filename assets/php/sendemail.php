<?php

	$name = @trim(stripslashes($_POST['name'])); 
	$email = @trim(stripslashes($_POST['email']));  
	$subject = @trim(stripslashes($_POST['subject']));  
	$message = @trim(stripslashes($_POST['message'])); 

	$email_from = $email;
<<<<<<< HEAD
	$email_to = 'susansayers@gmail.com'; //replace with your email
=======
	$email_to = 'susansayers@gmail.com'; 
>>>>>>> 018f57c98152c5b82f743892ff70c22282d8279e

	$body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

	$success = @mail($email_to, $body, 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message);
	
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
<<<<<<< HEAD
	<script>alert("Thank you for contacting me. I will get back to you as soon as possible!.");</script>
=======
	<script>alert("Thank you for contacting me. I will get back to you as soon as possible!");</script>
>>>>>>> 018f57c98152c5b82f743892ff70c22282d8279e
	<meta HTTP-EQUIV="REFRESH" content="0; url=http://trendytheme.net/demo/iamx/v/"> 
</head>
