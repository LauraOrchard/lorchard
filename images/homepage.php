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
		 //// LINK TO YOUR CUSTOM CSS FILES HERE
		 //// <link type="text/css" href="css/style.css" rel="stylesheet"/>
		 ///////////////////////////////////////////////////// -->

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
		<title>Bootstrap 101 Template (DDC Version!)</title>
	</head>
	<!--The actual page-->
	<body>
		<div class="container">

		<div class="row">
			<!--This is a responsive png logo made in Photoshop-->
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-2">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
				<img src="../images/LauraOrchardCommandLogo.png" alt="Laura Orchard" title="Laura Orchard" class="img-responsive">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-2">
			</div>
		</div>
		<!--Bootstrap Carousel-->
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="../images/concretebluecarousel.png" alt="Always greener...">
						<div class="carousel-caption">
							<h3>An aligned life creates aligned work.</h3>
						</div>
					</div>
					<div class="item">
						<img src="../images/3purplecarousel.png" alt="Evolving with the currents of change.">
						<div class="carousel-caption">
							<h3>Evolving with the currents of change, and taking my integrity with me.</h3>
						</div>
					</div>
					<div class="item">
						<img src="../images/concretedkbluecarousel.png" alt="Blah blah blah blah.">
						<div class="carousel-caption">
							<h3>Using development tools for social change.</h3>
						</div>
					</div>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
			<!-- Carousel -->
			<div class="row">
				<!--The following justified buttons will either be anchors on this page or to secondary pages-->
				<div class="col-lg-12">
					<div class="btn-group btn-group-justified" role="group" aria-label="...">
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-default">Home</button>
						</div>
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-default">About</button>
						</div>
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-default">Services</button>
						</div>
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-default">Work</button>
						</div>
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-default">Contact</button>
						</div>
					</div>
				</div>
			</div>
			<h1>Hello, world! I'm a Bootstrap page! :D</h1>
		</div>
	</body>
</html>