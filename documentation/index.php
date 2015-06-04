<!DOCTYPE html>
<html lang="en">
	<head>
		<!--this brings in all head links-->
		<?php require_once("lib/head-utils.html"); ?>
		<title>Lorchard</title>
	</head>
	<body class="bg-sky site">

		<!--header include-->
		<?php require_once("../lib/header.html"); ?>

		<!--all content lives in here-->
		<main class="site-content">

			<div class="container">

				<!--welcome message section-->
				<section class="welcome">
					<div class="row">
						<div class="col-xs-12">
							<div class="col-md-8 col-md-offset-2">
								<h2>Great Big Welcome Message!</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="col-md-8 col-md-offset-2">
								<p>Check out our magical product you want to purchase very much!</p>
							</div>
						</div>
					</div>
				</section>

				<hr/>

				<!--content section-->
				<section>
					<!--begin 1/3 column content layout-->
					<div class="row">
						<div class="col-md-4">
							<p>This is a 1/3 width column of content. There is a button below.</p>
							<a class="btn btn-info" href="#">Button</a>
						</div>
						<div class="col-md-4">
							<p>This is a 1/3 width column of content. There is a button below.</p>
							<a class="btn btn-info" href="#">Button</a>
						</div>
						<div class="col-md-4">
							<p>This is a 1/3 width column of content. There is a button below.</p>
							<a class="btn btn-info" href="#">Button</a>
						</div>
					</div><!--.row-->

					<hr/>

					<!--begin full-width content layout-->
					<div class="row">
						<div class="col-xs-12">
							<p>Examine the source code for the jQuery slideToggle.</p>

							<!--This is the clickable question div-->
							<div class="qa-panel" id="question">
								<p>Q: Is there an easy way to do a jQuery slideToggle panel? What the heck? Click me and find out...</p>
							</div>

							<!--This is the answer toggle-->
							<div class="qa-panel" id="answer">
								<p>A: YES! There is!!! :D Just take a look at the code...</p>
							</div>
						</div>
					</div>
				</section>

			</div><!--.container-->
		</main>

		<!--footer include-->
		<?php require_once("lib/footer.html"); ?>

	</body>
</html>