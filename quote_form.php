<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Code Hunterz</title>
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
			<div class="navigation">
        		<input type="checkbox" class="navigation_checkbox" id="navi-toggle">

        		<label for="navi-toggle" class="navigation_button">
            		<span class="navigation_icon">

            		</span>
        		</label>

        	<div class="navigation_background">&nbsp;</div>

        	<nav class="navigation_nav">
            	<ul class="navigation_list">
                	<li class="navigation_item">
                    	<a href="index.html" class="navigation_link">HOME</a>
                	</li>
                	<li class="navigation_item">
                    	<a href="about.html" class="navigation_link">ABOUT US</a>
                	</li>
                	<li class="navigation_item">
                    	<a href="portfolio.html" class="navigation_link">PORTFOLIO</a>
                	</li>
                	<!-- <li class="navigation_item">
                    	<a href="testimonials.html" class="navigation_link">TESTIMONIALS</a>
                	</li>
                	<li class="navigation_item">
                    	<a href="contact.html" class="navigation_link">CONTACT US</a>
                	</li>
                	<li class="navigation_item">
                    	<a href="./blogovi/archive.html" class="navigation_link">BLOG</a>
                	</li> -->
                	<hr class="navigation_hr">
                		<a href="https://www.facebook.com/" class="icon-nav">
                    		<i class="fab fa-facebook fa-3x" id=""></i>
                		</a>
                		<a href="https://www.linkedin.com" class="icon-nav">
                    		<i class="fab fa-linkedin fa-3x"></i>
                		</a>
                		<a href="https://www.google.rs/" class="icon-nav">
                    		<i class="fab fa-twitter-square fa-3x"></i>
                		</a>
                		<a href="https://github.com/EBXHub" class="icon-nav">
                    		<i class="fab fa-github-square fa-3x"></i>
                		</a>
                	<p class="navigation_lng">EN/SRB</p>
            </ul>
        </nav>
    	</div>
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
						</div>
					</div> <!-- end .row -->
					<div class="row box">
						<div class="col span-1-of-3 form-field">
							<label for="email">Email address:&nbsp;*</label>
						</div>
						<div class="col span-2-of-3 form-field">
							<input type="email" name="email" id="email" placeholder="Your email address" required>
						</div>
					</div> <!-- end .row -->
					<div class="row box">
						<div class="col span-1-of-3 form-field">
							<label for="web">Current web site:</label>
						</div>
						<div class="col span-2-of-3 form-field">
							<input type="text" name="web" id="web">
						</div>
					</div> <!-- end .row -->
					<div class="row box">
						<div class="col span-1-of-3 form-field">
							<label for="bus_name">Business name:</label>
						</div>
						<div class="col span-2-of-3 form-field">
							<input type="text" name="bus_name" id="bus_name">
						</div>
					</div> <!-- end .row -->
					<div class="row box">
						<div class="col span-1-of-3 form-field">
							<label>Are you interested in:&nbsp;*</label>
						</div>
						<div class="col span-2-of-3 form-field">
							<?php
								$checks = array(
											'web_design' => 'Custom web design', 
											'seo' => 'Search Engine Optimization', 
											'wordpress' => 'WordPress',
											'internet_marketing' => 'Internet Marketing',
											'SM' => 'Social Media advertising',
											'e-commerce' => 'E-commerce web site'
										);
								foreach ($checks as $key => $check) {
									echo "<input type='checkbox' name='proposal[]' value='$key' id='check'> $check<br>";
								}
							
							?>
						</div>
					</div> <!-- end .row -->
					<div class="row box">
						<div class="col span-1-of-3 form-field">
							<label for="find-us">How did you find us?</label>
						</div>
						<div class="col span-2-of-3 form-field">
							<?php
								$choices = array( 
											'friends' => 'Friends', 
											'search' => 'Search', 
											'advertisement' => 'Advertisement', 
											'other' => 'Other'
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
							<label>Please tell us a little about you and/or your business</label>
						</div>
						<div class="col span-2-of-3 form-field">
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
	
	<footer class="footer">
        <div class="footer_logo-box">
            <img src="img/logo-white.png" alt="Full logo" class="footer_logo">
			<br>
		</div>
        <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="footer_navigation">
                    <ul class="footer_list">
                        <li class="footer_item">
                            <a href="#" class="footer_link">About</a>
                        </li>
                        <li class="footer_item">
                            <a href="#" class="footer_link">Blog</a>
                        </li>
                        <li class="footer_item">
                            <a href="#" class="footer_link">Contact us</a>
                        </li>
                        <li class="footer_item">
                            <a href="#" class="footer_link">Privacy policy</a>
                        </li>
                        <li class="footer_item">
                            <a href="#" class="footer_link">Terms</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <p class="footer_copyright">
                    Built by
                    <a href="#" class="footer_link">EBX team</a>
					<br> Copyright &copy; EBX Hub
                </p>
            </div>
        </div>
    	</div>
    </footer>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/additional-methods.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/portfolio.js"></script>
    <script src="js/validation.js"></script> 

</body>
	
</html>
