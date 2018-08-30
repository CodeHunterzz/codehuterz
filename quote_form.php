<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>EBX solution</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/icon-font.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/grid.css">
	<link rel="stylesheet" type="text/css" href="css/portfolio.css">
	<link rel="stylesheet" type="text/css" href="css/queries.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">

	<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
	<link rel="manifest" href="favicons/site.webmanifest">
	<link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#603cba">
	<meta name="msapplication-config" content="favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	
</head>

<body class="quote-form-body">
	
	<header class="quote-header">
		<div class="row box">
			<?php include 'inc/nav.php'; ?>
		</div><!-- end .row -->
		<div class="row">
			<div class="hero-box">
				<h1>Request a Quote</h1>
			</div>
		</div><!-- end .row -->
	</header>
	
	<section class="quote-form">
		<div class="row box">
		<h2 class="quoteh2">We can help you!</h2>
		</div><!-- end .row -->
		<div class="row box">
		<p class="long-copy">Got a problem that needs a solution? We can help! Our clients love us because we're friendly, enthusiastic, accommodating, and we listen to your needs. We'll work with you to help you find the solutions you've been looking for!</p>
		<p class="long-copy">Ready to find out more? Fill out the form below and we'll start talking about options for your new site!</p>
		</div><!-- end .row -->
		<div class="form-box" id="form">
			<div class="row box">
				<form method="post" action="mailer.php" class="contact-form" id="quote-form">
					<div class="row">
					<!--	<p class="form-message"></p> -->
						<?php 
								if ($_GET['success'] == 1) {
									echo "<div class=\"form-messages success\">Thank you! Your message has been sent!</div>";
								}

								if ($_GET['success'] == -1) {
									echo "<div class=\"form-messages error\">Oops! Something went wrong. Please try again!</div>";
								}			
						?>
					</div> <!-- end .row -->
					<div class="row box">
						<div class="col span-1-of-3 form-field">
							<label for="name">Full Name:&nbsp;*</label>
						</div>
						<div class="col span-2-of-3 form-field">
							<input type="text" name="name" id="name" placeholder="Your name" required>
							<?php
								if ($_GET['name'] == -1) {
									echo "<div class=\"form-messages error\">Please enter your name!</div>";
								}
							?>
						</div>
					</div> <!-- end .row -->
					<div class="row box">
						<div class="col span-1-of-3 form-field">
							<label for="email">Email address:&nbsp;*</label>
						</div>
						<div class="col span-2-of-3 form-field" id="email-input">
							<?php
								if ($_GET['email'] == -1) {
									echo "<div class=\"form-messages error\">Please enter your email address!</div>";
								}
							?>
							<input type="email" name="email" id="email" placeholder="Your email address" required>
						</div>
					</div> <!-- end .row -->
					<div class="row box">
						<div class="col span-1-of-3 form-field">
							<label for="web">Current web site:</label>
						</div>
						<div class="col span-2-of-3 form-field" id="web">
							<?php
								if ($_GET['web'] == -1) {
									echo "<div class=\"form-messages error\">Please enter your web site!</div>";
								}
							?>
							<input type="text" name="web" id="web" placeholder="http://www.">
						</div>
					</div> <!-- end .row -->
					<div class="row box">
						<div class="col span-1-of-3 form-field">
							<label for="bus_name">Business name:</label>
						</div>
						<div class="col span-2-of-3 form-field" id="bus-name">
							<?php
								if ($_GET['bus-name'] == -1) {
									echo "<div class=\"form-messages error\">Please enter your Business name!</div>";
								}
							?>
							<input type="text" name="bus_name" id="bus_name">
						</div>
					</div> <!-- end .row -->
					<div class="row box">
						<div class="col span-1-of-3 form-field">
							<label>Are you interested in:&nbsp;*</label>
						</div>
						<div class="col span-2-of-3 form-field" id="proposal">
							<?php
								if ($_GET['proposal'] == -1) {
										echo "<div class=\"form-messages error\">Please select at least 1 item!</div>";
								}
							?>
							<?php
								$checks = array(
											'Web_design' => 'Custom web design', 
											'SEO' => 'Search Engine Optimization', 
											'WordPress' => 'WordPress',
											'Internet_marketing' => 'Internet Marketing',
											'Social_media' => 'Social Media advertising',
											'E-commerce_web_site' => 'E-commerce web site'
										);
								foreach ($checks as $key => $check) {
									echo "<input type='checkbox' name='proposal[]' value='$key' class='check'> $check<br>";
								}
							
							?>
						</div>
					</div> <!-- end .row -->
					<div class="row box">
						<div class="col span-1-of-3 form-field">
							<label for="find-us">How did you find us?</label>
						</div>
						<div class="col span-2-of-3 form-field" id="select">
							<?php
								$choices = array( 
											'friends' => 'Friends', 
											'Search' => 'Search', 
											'Advertisement' => 'Advertisement', 
											'Other' => 'Other'
											);
								echo "<select name='find' id='find'>\n";
								foreach ($choices as $key => $choice) {
									echo "<option value='$key'>$choice</option>\n";
								}
								echo "</select>";
							?>
						</div>  
					</div> <!-- end .row -->
					<div class="row box">
						<div class="col span-1-of-3 form-field">
							<label>Please tell us a little about you and/or your business&nbsp;*</label>
						</div>
						<div class="col span-2-of-3 form-field" id="msg">
							<?php
								if ($_GET['message'] == -1) {
										echo "<div class=\"form-messages error\">Please write something about you or your business!</div>";
								}
							?>
							<textarea name="message" id="message" placeholder="Your message" required></textarea>
						</div>  
					</div> <!-- end .row -->
					<div class="row box">
						<div class="col span-1-of-3 form-field">
							<label>&nbsp;</label>
						</div>
						<div class="col span-2-of-3 form-field">
							<button type="submit" id="submit-form" name="submit">Get Qoute Now</button>
						</div>  
					</div> <!-- end .row -->
				</form>
			</div> <!-- end .row -->
		</div> <!-- end .form-box -->
	</section>
	
	<?php include 'inc/main-footer.php'; ?>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/additional-methods.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/portfolio.js"></script>
    <script src="js/validation.js"></script> 

</body>
	
</html>
