<?php
require_once("Mail.php");
require_once "csrf.php";
if(session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}
if(@isset($_POST["email1"]) === true) {
	$emailAddress = filter_var($_POST["email1"], FILTER_SANITIZE_EMAIL);
} else {
	$emailAddress = "somebody@anon.com";
}
if(@isset($_POST["txtName1"]) === true) {
	$name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
} else {
	$name = "Contact From Site";
}
if(@isset($_POST["txtareaComments"]) === true) {
	$content = filter_var($_POST["txtName1"], FILTER_SANITIZE_STRING);
} else {
	$content = "Contact Form Contents";
}
try {
	if(verifyCsrf($_POST["csrfName"], $_POST["csrfToken"]) === true) {
		// email the user with an activation message
		$to = "orchard.laura@gmail.com";
		$from = $emailAddress;
		// build headers
		$headers = array();
		$headers["To"] = $to;
		$headers["From"] = $from;
		$headers["Reply-To"] = $from;
		$headers["Subject"] = "Laura Orchard Web Development";
		$headers["MIME-Version"] = "1.0";
		$headers["Content-Type"] = "text/html; charset=UTF-8";
		// build message
		$message = <<< EOF
<html>
	<body>
		<h3>From $name...</h3>
		<br />
		<p>$content</p>
		<p>End of message.</p>
	</body>
</html>
EOF;
		// send the email
		error_reporting(E_ALL & ~E_STRICT & ~E_DEPRECATED);
		$mailer =& Mail::factory("sendmail");
		$status = $mailer->send($to, $headers, $message);
		if(PEAR::isError($status) === true) {
			echo "<strong>Oops!</strong> Unable to send mail message:" . $status->getMessage();
		} else {
			echo '<span class="alert alert-success"><strong>Your message has been sent!</strong></span>';
		}
	}
} catch(Exception $exception) {
	echo "<strong>Sorry!</strong> Unable to help you: " . $exception->getMessage();
}