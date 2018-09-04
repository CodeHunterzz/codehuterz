<?php
// 
// if(isset($_POST['submit'])) {
//
// 	if(isset($_POST['name']) && !empty($_POST['name'])) {
// 		$name = filter_var(strip_tags(trim($_POST["name"])), FILTER_SANITIZE_STRING);
// 	} else {
// 		header("Location: http://www.ebxsolution.com/quote_form.php?name=-1#name");
//     	exit;
// 	}
//
// 	if(isset($_POST['email']) && !empty($_POST['email'])) {
// 		$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
// 	} else {
// 		header("Location: http://www.ebxsolution.com/quote_form.php?email=-1#email-input");
//     	exit;
// 	}
//
// 	if(isset($_POST['web']) && !empty($_POST['web'])) {
// 		$web = filter_var(trim($_POST['web']), FILTER_SANITIZE_URL);
// 	} else {
// 		header("Location: http://www.ebxsolution.com/quote_form.php?web=-1#web");
//     	exit;
// 		$web = "None";
// 	}
//
// 	if(isset($_POST['bus_name'])) {
// 		$bus_name = filter_var(strip_tags(trim($_POST["bus_name"])), FILTER_SANITIZE_STRING);
//
// 	} else {
// 		header("Location: http://www.ebxhub.com/quote_form.php?bus-name=-1#bus-name");
//     	exit;
// 		$bus_name = "None";
// 	}
//
//
// 	if(isset($_POST['proposal']) && !empty($_POST['proposal'])) {
// 		$proposal = $_POST['proposal'];
// 	} else {
// 		header("Location: http://www.ebxsolution.com/quote_form.php?proposal=-1#proposal");
//     	exit;
// 	}
//
//
// 	if(isset($_POST['find'])) {
// 		$find = strip_tags($_POST['find']);
// 	}
//
// 	if(isset($_POST['message']) && !empty($_POST['message'])) {
// 		$message = filter_var(trim($_POST["message"]), FILTER_SANITIZE_STRING);
// 	} else {
// 		header("Location: http://www.ebxsolution.com/quote_form.php?message=-1#msg");
//     	exit;
// 	}
//
// }
//
// 	if (empty($name) OR empty($message) OR empty($proposal) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR !filter_var($web, FILTER_SANITIZE_URL)) {
// 		header("Location: http://www.ebxsolution.com/quote_form.php?success=-1#form");
// 		exit;
// 	}
//
// 	$recipient = "office@codehunterz.com";
//
// 	$subject = "Quote Form Enquiry";
//
// 	$email_content = "Name: $name\n\n";
// 	$email_content .= "Email Address: $email\n\n";
//     $email_content .= "Current web cite: $web\n\n";
// 	$email_content .= "Business name: $bus_name\n\n";
// 	$checks  = 'None';
// 	if(isset($_POST['proposal']) && is_array($_POST['proposal']) && count($_POST['proposal']) > 0){
//     $checks = implode(', ', $_POST['proposal']);
// 	}
// 	$email_content .= "Interested in: " . $checks . "\n\n";
// 	$email_content .= "Find us: $find\n\n";
// 	$email_content .= "Message: \n$message\n";
//
// 	$email_headers = "From: $name <$email>";
//
// 	$send = mail($recipient, $subject, $email_content, $email_headers);
//
// 	if($send) {
// 		header("Location: http://www.ebxsolution.com/quote_form.php?success=1#form");
// 		exit;
// 	} else {
// 		header("Location: http://www.ebxsolution.com/quote_form.php?success=-1#form");
// 		exit;
// 	}
