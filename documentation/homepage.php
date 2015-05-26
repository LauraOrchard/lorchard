<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Bootstrap Latest compiled and minified CSS -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet"/>

		<!-- Optional Bootstrap theme -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css" rel="stylesheet"/>

		<!-- ////////////////////////////////////////////////
		 //// LINK TO YOUR CUSTOM CSS FILES HERE		 ///////////////////////////////////////////////////// -->
		<link type="text/css" href="../css/custom.css" rel="stylesheet"/>
		<link type="text/css" href="../css/carousel.css" rel="stylesheet"/>
		<link type="text/css" href="../css/sticky-footer.css" rel="stylesheet"/>


		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.min.js"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<title>LOrchard.org</title>
	</head>
	<!--The actual page-->
	<body>
		<!-- NAVBAR
		================================================== -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
			<!--<div class="navbar-wrapper">
				<div class="container">-->
					<!--to make the vabar transparent and always visible-->
					<!--<div class="navbar transparent navbar-inverse navbar-fixed-top">
						<nav class="navbar-inner">-->
					<nav class="navbar navbar-fixed-top">
						<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="#">LAURA ORCHARD</a>
							</div>
							<div id="navbar" class="navbar-collapse collapse">
								<ul class="nav navbar-nav">
									<li class="active"><a href="#">Home</a></li>
									<li><a href="#about">About</a></li>
									<li><a href="#about">Services</a></li>
									<li><a href="#about">Portfolio</a></li>
									<li><a href="#contact">Contact</a></li>
									<!--<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li class="dropdown-header">Nav header</li>
											<li><a href="#">Separated link</a></li>
											<li><a href="#">One more separated link</a></li>
										</ul>-->
									</li>
								</ul>
							</div>
						</div>
					</nav>

				</div>
			</div>
		</nav>


			<!-- Carousel
			 ================================================== -->
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img class="first-slide" src="../images/STEMgrate.jpg" alt="First slide" class="image-responsive">
						<div class="container">
							<div class="carousel-caption">
								<h1>Inspired...to develop for good.</h1>
								<!--<p>to develop for good.</p>-->
								<!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
							</div>
						</div>
					</div>
					<div class="item">
						<img class="second-slide" src="../images/NMStatePrintingConcrete.jpg" alt="Second slide" class="image-responsive">
						<div class="container">
							<div class="carousel-caption">
								<h1>Supporting social good requires great code.</h1>
								<p>And I love working on projects that benefit people in thoughtful ways.</p>
								<!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
							</div>
						</div>
					</div>
					<div class="item">
						<img class="third-slide" src="../images/PlanterConcrete.jpg" alt="Third slide" class="image-responsive">
						<div class="container">
							<div class="carousel-caption">
								<h1>Dedicated to problem-solving with care.</h1>
								<!--<p>And problem-solving with care.</p>-->
								<!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
							</div>
						</div>
					</div>
					<div class="item">
						<img class="fourth-slide" src="../images/PostOfficeConcrete.jpg" alt="Fourth slide" class="image-responsive">
						<div class="container">
							<div class="carousel-caption">
								<h1>Teamwork is an opportunity...</h1>
								<p>for everyone to shine.</p>
								<!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div><!-- /.carousel -->


			<!-- Marketing messaging and featurettes
			 ================================================== -->
			<!-- Wrap the rest of the page in another container to center all the content. -->

			<div class="container marketing">

				<!-- Three columns of text below the carousel -->
				<div class="row">
					<div class="col-lg-4 col-md-4">
						<!--<img class="img-square" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">-->
						<h2>Project Management</h2>
						<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
						<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
					</div><!-- /.col-lg-4 -->
					<div class="col-lg-4 col-md-4">
						<!--<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">-->
						<h2>Design</h2>
						<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
						<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
					</div><!-- /.col-lg-4 -->
					<div class="col-lg-4 col-md-4">
						<!--<img class="img-square" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">-->
						<h2>Teamwork</h2>
						<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
						<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
					</div><!-- /.col-lg-4 -->
				</div><!-- /.row -->




				<!-- START THE FEATURETTES -->

<!--				<hr class="featurette-divider">

				<div class="row featurette">
					<div class="col-md-7">
						<h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
						<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
					</div>
					<div class="col-md-5">
						<img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
					</div>
				</div>

				<hr class="featurette-divider">

				<div class="row featurette">
					<div class="col-md-7 col-md-push-5">
						<h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
						<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
					</div>
					<div class="col-md-5 col-md-pull-7">
						<img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
					</div>
				</div>

				<hr class="featurette-divider">

				<div class="row featurette">
					<div class="col-md-7">
						<h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
						<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
					</div>
					<div class="col-md-5">
						<img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
					</div>
				</div>

				<hr class="featurette-divider">-->

				<!-- /END THE FEATURETTES -->




				<footer class="footer footer-fixed-bottom">
					<div class="container">
						<p class="text-muted">Place sticky footer content here.</p>
					</div>
				</footer>


				<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
				<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>


			<!-- Bootstrap core JavaScript
			 ================================================== -->
			<!-- Placed at the end of the document so the pages load faster -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
			<script src="../../dist/js/bootstrap.min.js"></script>
			<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
			<script src="../../assets/js/vendor/holder.js"></script>
			<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
			<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
		</body>
</html>
