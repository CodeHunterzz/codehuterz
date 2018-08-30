<?php 

	$name = strip_tags(trim($_POST["name"]));
	$name = str_replace(array("\r", "\n"), array(" ", " "), $name);
	$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $web = strip_tags(trim($_POST["web"]));
	$web = str_replace(array("\r", "\n"), array(" ", " "), $web); 
	$bus_name = strip_tags(trim($_POST["bus_name"]));
	$bus_name = str_replace(array("\r", "\n"), array(" ", " "), $bus_name);
	$proposal = $_POST['proposal'];
	$find = strip_tags($_POST['find']);
	$message = strip_tags(trim($_POST["message"]));


	if (empty($name) OR empty($message) OR empty($web) OR empty($bus_name) OR empty($proposal) OR empty($find) OR $email == false) {
		header("Location: http://www.ebxhub.com/quote_form.php?success=-1#form");
		exit;
	}

	$recipient = "ebxsolution@gmail.com";

	$subject = "Quote form";
	$email_content .= "Name: $name\n\n";
	$email_content .= "Email: $email\n\n";
    $email_content .= "Current web site: $web\n\n";
	$email_content .= "Business name: $bus_name\n\n";
	if(!empty($_POST['proposal'])) {
		foreach ($_POST['proposal'] as $value) {
			$email_content .= "Interested in: $value\n\n";
		}
	}
	$email_content .= "Find us: $find\n\n";
	$email_content .= "<td>Message: </td>\n<td>$message</td>\n";


	$email_headers = "From: $name <$email>";

	
	if (mail($recipient, $subject, $email_content, $email_headers)) {
    	header("Location: http://www.ebxhub.com/quote_form.php?success=1#form");
    	exit;
  	} else {
    	header("Location: http://www.ebxhub.com/quote_form.php?success=-1#form");
    	exit;
  	}

	/*
	if(isset($_POST['submit'])) {
		$name = strip_tags(trim($_POST["name"]));
		$name = str_replace(array("\r", "\n"), array(" ", " "), $name);
		$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
		$web = strip_tags(trim($_POST["web"]));
		$web = str_replace(array("\r", "\n"), array(" ", " "), $web); 
		$bus_name = strip_tags(trim($_POST["bus_name"]));
		$bus_name = str_replace(array("\r", "\n"), array(" ", " "), $bus_name);
		$find = strip_tags($_POST['find']);
		if(isset($_POST['find'])) {
			$find = $_POST['find'];
		} else {
			$find = null;
		} 
		$message = strip_tags(trim($_POST["message"]));
		
		$errorEmpty = false;
		$errorEmail = false;
		
		if(empty($name) || empty($email) || empty($web) || empty($bus_name) || empty($message)) {
			echo "<span class='form-error'>Please fill in all fields!</span>";
			$errorEmpty = true;
		} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo "<span class='form-error'>Write a valid e-mail address!</span>";
			$errorEmail = true;
		} else {
			"<span class='form-succcess'>Please fill in all fields!</span>";
		}
	} else {
		echo "Something went wrong. Please try again!";
	}

	$recipient = "ebxsolution@gmail.com";

	$subject = "Quote form";

	$email_content .= "Name: $name\n\n";
	$email_content .= "Email: $email\n\n";
    $email_content .= "Current web site: $web\n\n";
	$email_content .= "Business name: $bus_name\n\n";
	if(!empty($_POST['proposal'])) {
		foreach ($_POST['proposal'] as $value) {
			$email_content .= "Interested in: $value\n\n";
		}
	}
	
	$email_content .= "Find us: $find\n\n";
	$email_content .= "Message: \n$message\n";

	$email_headers = "From: $name <$email>";

	/*
	if (mail($recipient, $subject, $email_content, $email_headers)) {
    	//header("Location: http://www.ebxhub.com/quote_form.php?success=1#form");
		echo "<span class='form-success'>Thank you! Your message has been sent!</span>";
    	
  	} else {
    	//header("Location: http://www.ebxhub.com/quote_form.php?success=-1#form");
		echo "<span class='form-error'>Something went wrong. Please try again!</span>";
    	
  	}
	*/
?>
<!--
<script>
	$("#name, #email, #web, #bus_name, #check, #find, #message").removeClass("input-error");
	
	var errorEmpty = "<?php/* echo $errorEmpty ?>";
	var errorEmail = "<?php echo $errorEmail ?>";
	
	if(errorEmpty == true) {
		$("#name, #email, #web, #bus_name, #check, #message").addClass("input-error");
	}
	
	if(errorEmail == true) {
		$("#email").addClass("input-error");
	}
	
	if(errorEmpty == false && errorEmail == false) {
		$("#name, #email, #web, #bus_name, #check, #message").val("");
	}
</script> -->