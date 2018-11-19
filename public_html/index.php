<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


		<!--Google Fonts-->
		<link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">


		<!--Font Awesome-->

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
				integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<!--Custom CSS-->
		<link rel="stylesheet" href="css/style.css">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
				integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"
				  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
				  crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
				  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
				  crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
				  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
				  crossorigin="anonymous"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="public_html/js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<title>Personal Web Project Main Page</title>
	</head>

	<body>

		<!-- Nav Bar -->


		<header>
			<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white shadow-sm rounded">
				<a class="navbar-brand ml-3" href="#"><img src="images/cactus.png" alt="cactus" class="img-responsive"> </a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto">
						<li class="nav-item">
							<a class="nav-link text-monospace cool-link" href="#home">Home <span
								class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-monospace cool-link" href="#about">About</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link text-bold text-monospace cool-link" href="#portfolio">Portfolio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-monospace cool-link" href="#testimonials">Testimonials</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-monospace cool-link" href="#contact">Contact</a>
						</li>
					</ul>
					<form class="form-inline my-lg-0">
						<button class="btn btn-outline-success my-2 my-sm-0 text-monospace mr-4" type="submit">
							//desertDwellingDev
						</button>
					</form>
				</div>
			</nav>

		</header>


		<!-- Splash -->


		<section id="home">
			<div class="container my-5 py-3">
				<div class="jumbotron mt-5 pt-5 bg-white">
					<h1 class="display-4 text-dark text-right lead text-monospace">David Sanderson</h1>
					<p class="lead text-dark text-right text-monospace">Full-Stack <span class="text-success lead">Web Developer.</span>
					</p>
				</div>
			</div>
		</section>


		<!-- About -->


		<section id="about" class="bg-light py-5">
			<div class="container py-3">
				<div class="row shadow p-5 bg-white rounded">
					<div class="col-sm-12">
						<h1 class="font-weight-bold text-monospace display-5">About</h1>
					</div>
					<div class="col-lg-7 col-lg-offset-5  col-xs-12 col-xs-offset-0">
						<p class="text-justify lead"> Hi, my name is David Sanderson! I am a Full-stack Web developer with
							experience using web technologies that include <span
								class="lead text-primary">Angular, JS, CSS, HTML, PHP,</span> and <span
								class="lead text-primary">Bootstrap</span> to create custom web solutions. I am an enthusiastic
							learner who excels in environments where I can problem solve and contribute to a team. I was on the
							dev team for 505FoodTruckFinder which was a contestant in the UNM App contest. I worked intensively
							on the Google Maps Javascript API integration during this project. In my free time enjoy exploring New Mexico and working on puzzles. I  am currently learning React
							and Node.js in my free time.
						</p>
					</div>
				</div>
			</div>
		</section>


		<!-- Portfolio -->


		<section id="portfolio" class="bg-light py-5">
			<h1 class="font-weight-bold text-center text-monospace display-5 pb-3">Portfolio</h1>
			<div class="container-fluid py-3
			 my-3">

				<div class="row py-3 bg-light rounded shadow">

					<div class="card-deck mx-3">
						<div class="card">
							<img class="card-img-top" src="..." alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">MonoSpace Clock</h5>
								<p class="card-text"> </p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
						<div class="card">
							<h5 class="card-title text-center">505FoodTruckFinder</h5>
							<img class="card-img-top" src="images/505foodtrucklogo.png" alt="Card image cap">
							<div class="card-body">
								<p class="card-text text-monospace">Part of a small dev team that built an application to connect Foodtruck owners with their customers. Used PHP, MYSQL, and Google Maps JavaScript API for the backend and Angular the front end. </p>
								<p class="card-text"><small class="text-muted">Last updated November 12, 2018</small></p>
							</div>
						</div>
						<div class="card bg-dark">
							<img class="card-img-top" src="..." alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">ABQ Records</h5>
								<p class="card-text"></p>
								<p class="card-text"><small class="text-muted">Last updated...</small></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- Testimonials -->

		<section>

			<div class="container bg-dark" id="testimonials">
				<h1 id="testimonials-header" class="display-6 font-weight-bold text-monospace text-right mr-5 pr-5">Testimonials</h1>

					<div class="row">
						<div class="col-md-2"></div>
						<div class="col m-1">
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="8000">
								<ol class="carousel-indicators">
									<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">

										<img class="d-block w-100" src="" alt="slide 1">
									</div>
									<div class="carousel-item">

										<img class="d-block w-100" src="" alt="slide 2">
									</div>
									<div class="carousel-item">

										<img class="d-block w-100" src="" alt="slide 3">
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
						<div class="col-md-2"></div>
					</div>

			</div>
		</section>



		<!-- Contact Form -->


		<section id="contact" class="bg-white py-5">
			<div class="container py-3 border">
				<div class="row shadow p-3 mb-5 bg-white rounded">
					<div class="col-sm-12 p-3">
						<h1 class="font-weight-bold text-right text-monospace text display-6">Contact</h1>
					</div>
					<div class="col-sm-6">
						<p class="lead font-weight-bold">Thanks for having a look around. My favorite thing about coding is
							that you can use it to build whatever you want. What can we build <span class="text-success">together?</span>

							<br><br> Need a website? Send me an email.

						</p>


					</div>

					<div class="col-sm-6">
						<form id="contact-form" method="post" action="php/mailer.php">
							<div class="form-group text-monospace">
								<label for="name">Name</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-user"></i></span>
									</div>
									<input class="form-control" type="text" name="name" id="name" placeholder="your name">
								</div>
							</div>
							<div class="form-group text-monospace">
								<label for="email">Email</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-envelope"></i></span>
									</div>
									<input class="form-control" type="email" name="email" id="email" placeholder="email">
								</div>
							</div>
							<div class="form-group text-monospace">
								<label for="subject">Subject</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-lightbulb"></i></span>
									</div>
									<input class="form-control" type="text" name="subject" id="subject" placeholder="subject">
								</div>
							</div>
							<div class="form-group text-monospace">
								<label for="message">Message</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-comment"></i></span>
									</div>
									<textarea name="message" rows="5" id="message" class="form-control"
												 placeholder="Have a question or a professional inquiry? Leave a message!"></textarea>
								</div>
								<div class="g-recaptcha" data-sitekey="6LeRznsUAAAAAMdkxUPFa6KLY_rjEiPs3PlBwzo-"></div>
							</div>
							<div class="list-group">
								<button class="btn btn-success" type="submit">Submit</button>
								<button class="btn btn-dark" type="reset">Reset</button>
							</div>

						</form>
					</div>
				</div>
				<!--empty area for form error/success output-->
				<div class="row">
					<div class="col-xs-12">
						<div id="output-area"></div>
					</div>
				</div>
			</div>
		</section>


		<!-- Footer -->


		<footer>
			<div class="container-fluid col-lg-12 col-sm-12 col-mid-12">
				<div class="row center" id="footer">
					<ul class="nav mx-auto">
						<li>
						<li>
							<a href="https://codepen.io/desertdwellndev/" target="_blank" class="text-secondary">
							<span class="fa-stack fa-2x">
							<i class="fas fa-stack-2x"></i>
							<i class="fab fa-codepen fa-stack-1x"></i>
							</span>
							</a>
						</li>
						<li>
							<a href="https://github.com/dsanderson90" target="_blank" class="text-secondary">
							<span class="fa-stack fa-2x">
							<i class="fas fa-stack-2x"></i>
							<i class="fab fa-github fa-stack-1x"></i>
							</span>
							</a>
						</li>
						<li>
							<a href="https://www.linkedin.com/in/david-sanderson-49422879/" target="_blank"
								class="text-secondary">
							<span class="fa-stack fa-2x">
							<i class="fas fa-stack-2x"></i>
							<i class="fab fa-linkedin-in fa-stack-1x"></i>
							</span>
							</a>
						</li>
						<li>
						<a href="https://twitter.com/desertdwellndev" target="_blank" class="text-secondary">
							<span class="fa-stack fa-2x">
							<i class="fas fa-stack-2x"></i>
							<i class="fab fa-twitter fa-stack-1x"></i>
							</span>
						</a>
						</li>
					</ul>
				</div>
			</div>
		</footer>
	</body>
</html>