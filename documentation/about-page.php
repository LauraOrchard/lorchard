<!DOCTYPE html>
<html lang="en">
	<head>
		<!--this brings in all head links-->
		<?php require_once("../lib/head-utils.html"); ?>
		<title>Lorchard</title>
	</head>
	<body class="bg-blue site">

		<!--header include-->
		<?php require_once("../lib/header.html"); ?>

		<!--all content lives here-->
		<main class="site-content">

			<div class="container" id="page-container">

				<!--welcome message section-->
				<section>
					<!--begin 1/3 column content layout-->
					<div class="row">
						<div class="col-md-4">
							<h3></h3>
							<p>This is a 1/3 width column of content. There is a button below.</p>

						</div>
						<div class="col-md-4">
							<p>This is a 1/3 width column of content. There is a button below.</p>

						</div>
						<div class="col-md-4">
							<p>This is a 1/3 width column of content. There is a button below.</p>

						</div>
					</div><!--.row-->

				</section>

			</div><!--.container-->

		</main>

		<!--footer include-->
		<?php require_once("../lib/footer.html"); ?>

	</body>
</html>