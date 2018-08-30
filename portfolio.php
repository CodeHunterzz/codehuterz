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
	<link rel="stylesheet" type="text/css" href="css/portfolio.css">
	<link rel="stylesheet" type="text/css" href="css/queries.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900">

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

<body>

  <?php include 'inc/nav.php'; ?>

    <header id="header" class="header">

        <div class="header_logo-box">
            <img src="img/logo-white.png" alt="Logo" class="header_logo">
        </div>

        <div class="header_text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">Portfolio</span>
                <span class="heading-primary--sub">Some of our customers &amp; work</span>
            </h1>
            <a href="#section-about" class="btn btn--transparent btn--animated">Discover our work</a>
        </div>

    </header>

    <main>
        <section class="section-about" id="section-about">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary portfolio-h2">
                    Our Projects
                </h2>
				<p class="long-copy">We specialize in creating web designs that are functional, beautiful and target our client's audience. We have had the opportunity to work with many different types of clients who represent a wide variety of business models.</p>
            </div>
            <?php include 'inc/porfolio/work.php'; ?>
        </section>

        <section class="section-book ">
			<div class="call-to-action">
				<div class="row js--wp-11">
					<h2>Are you ready to get <br> started?</h2>
				</div><!-- end .row -->
				<div class="row js--wp-12">
					<a href="quote_form.php" class="btn-go">Let's go &nbsp; <i class="far fa-paper-plane"></i></a>
				</div><!-- end .row -->
			</div>
        </section>
    </main>

    <?php include 'inc/main-footer.php'; ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/portfolio.js"></script>
</body>

</html>
