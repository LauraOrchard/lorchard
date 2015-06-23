<!DOCTYPE html>
<html lang="en">
	<head>
		<!--all head links-->
		<?php require_once("../lib/head-utils.html"); ?>
		<title>Lorchard</title>
	</head>
	<body class="bg-blue site">

		<!--header include-->
		<?php require_once("../lib/header.html"); ?>

		<!--all content lives here-->
		<main class="site-content">

			<div class="container" id="page-container">
				<div class="row">
					<div class="col-md-8">
						<h2>Connect with me</h2>
						<ul style="list-style-type:none">
							<li>Laura Orchard</li>
							<li>(505) 501-1560</li>
							<li>orchard.laura@gmail.com</li>
							<li></li><br />
							<li>Please email me using the address shown above. <br />
								Using the form below may cause you to question your sanity.</li>
						</ul>
					</div>
				</div>


	<!--						<main class="container">-->
				<div class="row">
						<!-- The div class="form-wrap" contains the form. It's set to a column width of 12 for small screens, and a column width of 6 for medium screens on up -->
						<div class="col-xs-12 col-md-6 form-wrap">
							<!-- Form is centered within it's container, and is set to 10 be columns wide RELATIVE TO IT'S CONTAINER, and offset to the right by one column. See classes: col-xs-offset-1 & col-xs-10 -->
							<form method="post" action="email.php" id="contact-form" class="form-horizontal col-xs-10 col-xs-offset-1">



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
									<button id="contact-submit" type="submit" class="btn" <a href="thankyou.php">Submit</button></a>
								</div>
								<div class="outputArea"></div>


							</form>
					</div> <!--close form wrap-->
				</div> <!--.row-->
			</div><!--.container-->
		</main>

			<!--footer include-->
			<?php require_once("../lib/footer.html"); ?>

	</body>
</html>