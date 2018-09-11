<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Code Hunterz is a team of experts experienced in web development, web design and maintaining websites." />
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/icon-font.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/codepen.css">
    <link rel="stylesheet" href="css/scrool.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <title>Web Development - Pravljenje web sajtova</title>
    <style media="screen">
      #container img {
        width: 100%;
      }
    </style>
</head>

<body>

    <?php include 'inc/nav.php'; ?>

    <header class="header" id="particles-js">

        <div class="header_logo-box">
            <img src="img/logo-white.png" alt="Logo" class="header_logo">
        </div>

        <div class="header_text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">Code</span>
                <span class="heading-primary--main-sub">Hunterz</span>
                <span class="heading-primary--sub">IS WHERE talent turns into modern web development</span>
            </h1>
        <!--    <a href="#section-about" class="btn btn--transparent btn--animated">Discover more</a> -->
        </div>

    </header>

    <main>
        <section class="section-about" id="section-about">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="section-about_heading heading-secondary">
                    Our Projects
                </h2>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-cm-6 col-12">
                        <h2 class="section-about_heading-1 u-margin-bottom-small">When creating a website, it all starts with an idea</h2>
                        <p class="section-about_paragraph">
                            Our clients all had a vision of how they wanted their website to look and feel but didn’t have the tools to put their vision
                            on the screen. Code Hunterz focuses on designing your website but we also focus on its functionality
                            as we know that it’s a huge influence over your prospective client’s decision whether or not
                            to buy your product or continue reading your article. We are the best in web development, web design and responsive web design. </p>

                        <p class="section-about_paragraph">
                            Of course, we want to show you that we know what we’re talking about. The best way to see our talent and skills are by seeing
                            our past projects. Click here here to be taken to our list of projects.
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-cm-6 col-12">

                        <div id="container"></div>
                        <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/175711/delaunay.js"></script>
                        <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.13.2/TweenMax.min.js"></script>

                        <!-- <img class="section-about_img" src="img/rawpixel.jpg" alt=""> -->
                    </div>
                </div>
            </div>
        </section>

        <section class="section-features">
            <div class="u-center-text">
                <h2 class="heading-white">
                    Our Services
                </h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="card-column col-lg-3 col-md-4 col-sm-6 col-12 u-margin-bottom-medium">
                        <div class="thecard">
                            <div class="thecard__side thecard__side--front">
                                <i class="thecard-icon fas fa-globe"></i>
                                <hr class="thecard-separator">
                                <h3 class="thecard-text">website
                                    <br>development</h3>
                            </div>

                            <div class="thecard__side thecard__side--back">
                                <div class="thecard__side--back-text">
                                    After only two weeks from setting up a project and delivering the material, you can have a tested and operational website
                                    online
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-column col-lg-3 col-md-4 col-sm-6 col-12 u-margin-bottom-medium">
                        <div class="thecard">
                            <div class="thecard__side thecard__side--front">
                                <i class="thecard-icon far fa-money-bill-alt"></i>
                                <hr class="thecard-separator">
                                <h3 class="thecard-text">e-commerce
                                    <br>development</h3>
                            </div>

                            <div class="thecard__side thecard__side--back">
                                <div class="thecard__side--back-text">
                                    Take advantage of the Internet to develop and grow your product sales with smart software solutions and CMS platforms for
                                    online shopping
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-column col-lg-3 col-md-4 col-sm-6 col-12 u-margin-bottom-medium">
                        <div class="thecard">
                            <div class="thecard__side thecard__side--front">
                                <i class="thecard-icon fab fa-connectdevelop"></i>
                                <hr class="thecard-separator">
                                <h3 class="thecard-text">Internet
                                    <br>Marketing</h3>
                            </div>

                            <div class="thecard__side thecard__side--back">
                                <div class="thecard__side--back-text">
                                    We offer a complete and unified process of researching and creating an Internet marketing strategy in relation to the desired
                                    goals
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-column col-lg-3 col-md-4 col-sm-6 col-12 u-margin-bottom-medium">
                        <div class="thecard">
                            <div class="thecard__side thecard__side--front">
                                <i class="thecard-icon fab fa-wordpress"></i>
                                <hr class="thecard-separator">
                                <h3 class="thecard-text">wordpress
                                    <br>development</h3>
                            </div>

                            <div class="thecard__side thecard__side--back">
                                <div class="thecard__side--back-text">
                                    Ease of use of the WordPress platform and an appealing interface have enabled everyone to update web applications without
                                    problems
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card-column col-lg-3 col-md-4 col-sm-6 col-12 u-margin-bottom-medium">
                        <div class="thecard">
                            <div class="thecard__side thecard__side--front">
                                <i class="thecard-icon fas fa-address-card"></i>
                                <hr class="thecard-separator">
                                <h3 class="thecard-text">domain
                                    <br>registration</h3>
                            </div>

                            <div class="thecard__side thecard__side--back">
                                <div class="thecard__side--back-text">
                                    Choose the appropriate .com, .rs, .xyz or any top-level domain in our offer and register it with our help, advice or support
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-column col-lg-3 col-md-4 col-sm-6 col-12 u-margin-bottom-medium">
                        <div class="thecard">
                            <div class="thecard__side thecard__side--front">
                                <i class="thecard-icon fab fa-maxcdn"></i>
                                <hr class="thecard-separator">
                                <h3 class="thecard-text">Technical
                                    <br>support</h3>
                            </div>

                            <div class="thecard__side thecard__side--back">
                                <div class="thecard__side--back-text">
                                    Depending on the level of package you choose, you can have unlimited support to solve all the problems with your web application
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-column col-lg-3 col-md-4 col-sm-6 col-12 u-margin-bottom-medium">
                        <div class="thecard">
                            <div class="thecard__side thecard__side--front">
                                <i class="thecard-icon fas fa-phone"></i>
                                <hr class="thecard-separator">
                                <h3 class="thecard-text">Multi CDN
                                    <br>support</h3>
                            </div>

                            <div class="thecard__side thecard__side--back">
                                <div class="thecard__side--back-text">
                                    Content Delivery Network - Enable visitors more comfort and reliability in your site using the online content delivery network
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-column col-lg-3 col-md-4 col-sm-6 col-12 u-margin-bottom-medium">
                        <div class="thecard">
                            <div class="thecard__side thecard__side--front">
                                <i class="thecard-icon fas fa-hospital-symbol"></i>
                                <hr class="thecard-separator">
                                <h3 class="thecard-text">website
                                    <br>hosting</h3>
                            </div>

                            <div class="thecard__side thecard__side--back">
                                <div class="thecard__side--back-text">
                                    We will choose the best and most optimal web hosting packages for your web presentation and set up your web content
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 u-margin-bottom-medium">
                        <div class="featueres-box">
                            <i class="featueres-box-icon fas fa-globe"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small blacktext">website
                                <br>development</h3>
                            <div class="featueres-box-text blacktext">
                                Nakom samo dve nedelje od postavljanja projektong zadatka i dostave materijala, možete imati testiranu i operativnu web stranicu
                                online
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 u-margin-bottom-medium">
                        <div class="featueres-box">
                            <i class="featueres-box-icon far fa-money-bill-alt"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small blacktext">e-commerce
                                <br>DEVELOPMENT</h3>
                            <p class="featueres-box-text blacktext">
                                Iskorisite internet za razvoj i rast prodaje vaših proizvoda uz pametna softverska rešenja i CMS platforme za online trgovinu
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 u-margin-bottom-medium">
                        <div class="featueres-box">
                            <i class="featueres-box-icon fab fa-connectdevelop"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small blacktext">Internet
                                <br>Marketing</h3>
                            <p class="featueres-box-text blacktext">
                                Nudimo kompletan i objedinjen proces istraživanja i kreiranja strategije Internet marketinškog nastupa u odnosu na željene
                                ciljeve
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 u-margin-bottom-medium">
                        <div class="featueres-box">
                            <i class="featueres-box-icon fab fa-wordpress"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small blacktext">wordpress
                                <br>development</h3>
                            <p class="featueres-box-text blacktext">
                                Jednostavnost korišćenja platforme WordPress i dopadljiv interfejs omogućili su da svi bez problema ažuriraju web aplikacije
                            </p>
                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-lg-3 col-md-6 col-sm-6 u-margin-bottom-medium">
                        <div class="featueres-box">
                            <i class="featueres-box-icon fas fa-address-card u-margin-bottom-small"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small blacktext">Registracija
                                <br>domena</h3>
                            <p class="featueres-box-text blacktext">
                                Odaberite odgovarajući .com, .rs, .xyz ili bilo koji top-level domain u našoj ponudi i registrujte ga uz našu pomoć, savet
                                ili podršku
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 u-margin-bottom-medium">
                        <div class="featueres-box">
                            <i class="featueres-box-icon fab fa-maxcdn"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small blacktext">Multi CDN
                                <br>podrška</h3>
                            <p class="featueres-box-text blacktext">
                                Content delivery network- omogućite posetiocima veći komfor i pouzdanost u radu vašeg sajta koristeći Mrežu za isporučivanje
                                online sadržaja
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 u-margin-bottom-medium">
                        <div class="featueres-box">
                            <i class="featueres-box-icon fas fa-phone u-margin-bottom-small"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small blacktext">Tehnička
                                <br>podrška</h3>
                            <p class="featueres-box-text blacktext">
                                U zavisnosti od nivoa paketa koji ostvarite, možete imati neograničenu podršku za rešavanje svih problema oko vaše web aplikacije
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 u-margin-bottom-medium">
                        <div class="featueres-box">
                            <i class="featueres-box-icon fas fa-hospital-symbol fa-4x u-margin-bottom-small"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small blacktext">Hosting
                                <br>web aplikacija</h3>
                            <p class="featueres-box-text blacktext">
                                Odabraćemo najbolje i najoptimalnije web hosting pakete za vašu web prezentaciju i postaviti u funkciju vaš web sadžaj
                            </p>
                        </div>
                    </div>

                </div>
            -->
            </div>
        </section>

        <!-- <section class="section-stories">

            <div class="bg-video bg-video-1">
                <video class="bg-video_content" autoplay muted loop>
                    <source src="vid/walking.mp4" type="video/mp4"/> your browser is not supported!
                </video>
            </div>
            <div class="u-center-text u-margin-bottom-medium u-margin-top-big">
                <h2 class="heading-secondary">
                    What our clients are saying about us
                </h2>
            </div>



            <div class="container-fluid u-margin-bottom-medium">

                <div class="story">
                    <div class="row">

                      <div class=" col-lg-12 story_textt">
                          <h1 class="story_heading-1">Uros Perovic</h1>
                          <h3 class="story_heading-2">owner of Beogal</h3>
                          <p class="story_text">"
Efficiency, speed of website development, persistence to find the right solution and great commitment to business is what this fantastic team of young experts has to offer.."</p>
                      </div>
                    </div>
                </div>

            </div>

            <div class="container-fluid u-margin-bottom-medium">

                <div class="story">
                    <div class="row">

                        <div class=" col-lg-12 story_textt">
                            <h1 class="story_heading-1">Zoran Zunic</h1>
                            <h3 class="story_heading-2">owner of the Forma Vitale / Miha Bodytec studio</h3>
                            <p class="story_text">"Getting to know people from EBX Solution over a cup off coffe has turned into a fantastic long-term
                                cooperation. I can only imagine what would happen if we had beer :D"</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container-fluid u-margin-bottom-big">

                <div class="story">
                    <div class="row">

                        <div class=" col-lg-12 story_textt">
                            <h1 class="story_heading-1">Kathy Wilkins</h1>
                            <h3 class="story_heading-2">interior designer</h3>
                            <p class="story_text">"EBX Solution did a great job of listening to my needs but also being able to create my website
                                in my budget.Could not be happier i definitely recommend them!"</p>
                        </div>
                    </div>
                </div>

            </div>

        </section> -->

        <section class="section-book ">
            <div class="row">
                <div class="book col-md-10 offset-md-1 col-sm-12 col-12" style="width: 100%; padding: 35px;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="u-margin-bottom-small col-md-12 u-center-text">
                                <h2 class="heading-secondary">
                                    Contact Us
                                </h2>
                            </div>
                            <div class="col-md-4 col-sm-12 col-12" id="form">
								<?php
									if ($_GET['success'] == 1) {
										echo "<div class=\"form-messages success\">Thank you! Your message has been sent!</div>";
									}

									if ($_GET['success'] == -1) {
										echo "<div class=\"form-messages error\">Oops! Something went wrong. Please try again!</div>";
									}
								?>

                                <form action="mail.php" class="form" method="post" id="contact_form">

                                    <div class="form_group" id="email-input">
										<?php
											if ($_GET['email'] == -1) {
												echo "<div class=\"form-messages error\">Please enter your email address!</div>";
											}
										?>
                                        <input type="email" class="form_input" name="email" placeholder="Email address" id="email" required>
                                        <label for="email" class="form_label">Email address</label>
                                    </div>

                                    <div class="form_group" id="msg">
										<?php
											if ($_GET['message'] == -1) {
													echo "<div class=\"form-messages error\">Please write something!</div>";
											}
										?>
                                        <textarea rows="10" cols="20" class="form_input" placeholder="Message" name="message" required></textarea>
                                    </div>
                                    <div class="form_group">
                                        <button type="submit" name="send" class="btn btn--green">send&rarr;</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4 col-sm-12 col-12 ">
                              <div class="book_text">
                                   Office :
                                  <br>
                                  <i class="far fa-envelope "></i> Email : office@codehunterz.com
                                  <br> Phone - 1 : +381/65 6928295
                                  <br> Phone - 2 : +381/64 2618429
                              </div>
                          </div>
                          <div class="col-md-4 col-sm-12 col-12">
                              <div class="book_text">
                                  Social Network :
                                  <br>

                                    <!-- <a href=" https://www.facebook.com" class="icon-contact">
                                        <i class="fab fa-facebook fa-3x"></i>
                                    </a> -->
                                    <a href="https://www.linkedin.com/in/code-hunterz-58b03a170/" class="icon-contact">
                                        <i class="fab fa-linkedin fa-3x"></i>
                                    </a>
                                    <!-- <a href="https://twitter.com" class="icon-contact">
                                        <i class="fab fa-twitter-square fa-3x"></i>
                                    </a> -->
									<a href="https://www.instagram.com/codehunterz/" class="icon-contact">
                                        <i class="fab fa-instagram fa-3x"></i>
                                    </a>
                                <!--    <a href="https://www.youtube.com/channel/UC50MbAm-Lr-o54pDyYH_5bQ" class="icon-nav">
									  <i class="fab fa-youtube-square fa-3x"></i>
								  	</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <?php include 'inc/main-footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script>
        particlesJS.load('particles-js', 'particles.json', function () {
            console.log('callback - particles.js config loaded');
        });
    </script>
    <script src="js/scriptcodepen.js"></script>
</body>

</html>
