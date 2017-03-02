<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Joseph Rohrer - PORTFOLIO</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css"
          rel="stylesheet"/>

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- jQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js" type="text/javascript"></script>

	<!-- jQuery Form, Validate, Additional Methods -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js" type="text/javascript"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
			  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
			  crossorigin="anonymous"></script>

	<!-- Your JavaScript Form Validator -->
	<script src="js/form-validate.js"></script>

	<!-- Scrolling Nav JavaScript -->
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/scrolling-nav.js"></script>

	<!-- MY Custom JS -->
	<script src="js/custom.js" type="text/javascript"></script>
	<style type="text/css">
		.page-scroll {
		}
	</style>

	<script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <div class="name">
                        <span class="firstname">joseph</span>rohrer
                    </div>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About Me</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Hi! I'm Joey.</div>
                <a href="#portfolio" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>

    <!-- Intro Section -->
    <!--<section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Hi. I'm Joey.</h1>
                    <a class="btn btn-default page-scroll" href="#about">Click Me to Scroll Down!</a>
                </div>
            </div>
        </div>
    </section>-->

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>About Section</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio-section">
		 <div class="container">
			 <div class="row">
				 <div class="col-lg-12 text-center">
					 <h1 class="section-heading">PORTFOLIO</h1>
					 <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
				 </div>
			 </div>
			 <div class="row">
				 <div class="col-md-4 col-sm-6 portfolio-item">
					 <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
						 <div class="portfolio-hover">
							 <div class="portfolio-hover-content">
								 <i class="fa fa-plus fa-3x"></i>
							 </div>
						 </div>
						 <img src="images/portfolio/roundicons.png" class="img-responsive" alt="">
					 </a>
					 <div class="portfolio-caption">
						 <h4>Round Icons</h4>
						 <p class="text-muted">Graphic Design</p>
					 </div>
				 </div>
				 <div class="col-md-4 col-sm-6 portfolio-item">
					 <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
						 <div class="portfolio-hover">
							 <div class="portfolio-hover-content">
								 <i class="fa fa-plus fa-3x"></i>
							 </div>
						 </div>
						 <img src="images/portfolio/startup-framework.png" class="img-responsive" alt="">
					 </a>
					 <div class="portfolio-caption">
						 <h4>Startup Framework</h4>
						 <p class="text-muted">Website Design</p>
					 </div>
				 </div>
				 <div class="col-md-4 col-sm-6 portfolio-item">
					 <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
						 <div class="portfolio-hover">
							 <div class="portfolio-hover-content">
								 <i class="fa fa-plus fa-3x"></i>
							 </div>
						 </div>
						 <img src="images/portfolio/treehouse.png" class="img-responsive" alt="">
					 </a>
					 <div class="portfolio-caption">
						 <h4>Treehouse</h4>
						 <p class="text-muted">Website Design</p>
					 </div>
				 </div>
				 <div class="col-md-4 col-sm-6 portfolio-item">
					 <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
						 <div class="portfolio-hover">
							 <div class="portfolio-hover-content">
								 <i class="fa fa-plus fa-3x"></i>
							 </div>
						 </div>
						 <img src="images/portfolio/golden.png" class="img-responsive" alt="">
					 </a>
					 <div class="portfolio-caption">
						 <h4>Golden</h4>
						 <p class="text-muted">Website Design</p>
					 </div>
				 </div>
				 <div class="col-md-4 col-sm-6 portfolio-item">
					 <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
						 <div class="portfolio-hover">
							 <div class="portfolio-hover-content">
								 <i class="fa fa-plus fa-3x"></i>
							 </div>
						 </div>
						 <img src="images/portfolio/escape.png" class="img-responsive" alt="">
					 </a>
					 <div class="portfolio-caption">
						 <h4>Escape</h4>
						 <p class="text-muted">Website Design</p>
					 </div>
				 </div>
				 <div class="col-md-4 col-sm-6 portfolio-item">
					 <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
						 <div class="portfolio-hover">
							 <div class="portfolio-hover-content">
								 <i class="fa fa-plus fa-3x"></i>
							 </div>
						 </div>
						 <img src="images/portfolio/dreams.png" class="img-responsive" alt="">
					 </a>
					 <div class="portfolio-caption">
						 <h4>Dreams</h4>
						 <p class="text-muted">Website Design</p>
					 </div>
				 </div>
			 </div>
		 </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>Contact</h1>
                </div>
            </div>
            <div class="row">
                <form id="contactForm" name="sentMessage" action="php/mailer.php" method="post">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name *" id="name" name="name" required
                                   data-validation-required-message="Please enter your name.">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email *" id="email" name="email" required
                                   data-validation-required-message="Please enter your email address.">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" name="phone" required
                                   data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
								<textarea class="form-control" placeholder="Your Message *" id="message" name="message" rows="6" required
                                  data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>

						 <!-- reCAPTCHA -->
						 <div class="g-recaptcha" data-sitekey="6LencRcUAAAAAFTwMMC_Hv00hlvTxfaee7zTFmVs"></div>

						 <div class="col-lg-12 text-center">
                        <div id="success"></div>

                        <button type="submit" class="btn-xl">Send Message</button>
                    </div>

						 <!--empty area for form error/success output-->
						 <div class="row">
							 <div class="col-xs-12">
								 <div class= "alert alert-danger" id="output-area"></div>
							 </div>
						 </div>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Joseph Rohrer 2017</span>
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </footer>


</body>

</html>
