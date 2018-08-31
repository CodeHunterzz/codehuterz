<?php 

if(isset($_POST['send'])) { 
	
	if(isset($_POST['email']) && !empty($_POST['email'])) {
		$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
	} else {
		header("Location: http://www.codehunterz.com/index.php?email=-1#email-input");
    	exit; 
	} 

	if(isset($_POST['message']) && !empty($_POST['message'])) {
		$message = filter_var(trim($_POST["message"]), FILTER_SANITIZE_STRING);
	} else {
		header("Location: http://www.codehunterz.com/index.php?message=-1#msg");
    	exit; 
	}
	
}
	
	if (empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: http://www.codehunterz.com/index.php?success=-1#form");
		exit;
	}
 
	$recipient = "office@codehunterz.com";
	
	$subject = "Contact Form Message";

	
	$email_content .= "Email Address: $email\n\n";
	$email_content .= "Message: \n$message\n";

	$email_headers = "From: <$email>";

	$send = mail($recipient, $subject, $email_content, $email_headers);

	if($send) {
		header("Location: http://www.codehunterz.com/index.php?success=1#form");
		exit;
	} else {
		header("Location: http://www.codehunterz.com/index.php?success=-1#form");
		exit;
	}
