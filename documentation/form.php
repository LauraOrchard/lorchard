<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"       rel="stylesheet" />
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
		<link type="text/css" href="/lib/bootcamp-coders.css"                                              rel="stylesheet" />
		<link type="image/x-icon" href="/images/favicon.ico"                                               rel="icon" />
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.min.js"></script>
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.min.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/lib/bootcamp-coders.js"></script>
		<!-- Google Fonts -->
		<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'/>

		<!-- Custom Stylesheet -->
		<link rel="stylesheet" type="text/css" href="/css/formstyle.css"/>

		<!-- Custom JS/jQuery -->
		<script type="text/javascript" src="js/custom.js"></script>

		<title>Contact Form</title>
	</head>
	<body>
		<header>
			<div class="container">
				<h2>Connect with me!</h2>
				<p>Send me a note by filling out the contact form below.</p>
			</div>
		</header>

		<main class="container">
			<!-- The div class="form-wrap" is the black box containing the form. It's set to a column width of 12 for small screens, and a column width of 6 for medium screens on up -->
			<div class="col-xs-12 col-md-6 form-wrap">
				<!-- Form is centered within it's container, and is set to 10 be columns wide RELATIVE TO IT'S CONTAINER, and offset to the right by one column. See classes: col-xs-offset-1 & col-xs-10 -->
				<form method="post" action="contact-email.php" id="sample-form" class="form-horizontal col-xs-10 col-xs-offset-1">

					<div class="form-group">
						<!-- Labels for each field are places within a <label> tag. Use the "for" attribute. the class="control-label" is for styling. -->
						<label for="inputName1" class="control-label">Name</label>
						<!-- the div class="input-group" contains both the text field and the icon to the left -->
						<div class="input-group">
							<!-- this div and span contains the glyphicon to the left. aria-hidden is so that screen readers don't read this element -->
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
							</div>
							<!-- text field input. pay attention to the id, placeholder text, type, and placeholder attributes -->
							<input type="text" class="form-control" id="textName1" placeholder="Your name here." maxlength="150" />
						</div>
					</div>

					<div class="form-group">
						<label for="email1" class="control-label">Email</label>
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							</div>
							<input type="email" id="email1" class="form-control" maxlength="150" placeholder="your.email@something.com"/>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label" for="txtareaComments">Your message:</label>
						<textarea class="form-control" rows="5" id="txtareaComments" maxlength="500" placeholder="500 characters max."></textarea>
					</div>

					<div class="form-group">
						<!-- the following <a> tag has been styled as a button with class="btn" -->
						<button id="contact-submit" type="submit" class="btn" <a href="#">Submit</button>
					</div>
				</form>
			</div> <!-- CLOSE FORM WRAP -->
		</main>
	</body>
</html>