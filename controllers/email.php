<?php
// start a PHP session for CSRF protection
session_start();

// require CSRF protection
require_once(dirname(dirname(dirname(__DIR__))) . "/lib/csrf.php");

// require encrypted configuration files
require_once("/etc/apache2/capstone-mysql/lib/encrypted-config.php");

// require the mySQL enabled User class
require_once("YOUR-USER-CLASS.php");

// require the mySQL enabled Profile class
require_once("YOUR-PROFILE-CLASS.php");

// require PEAR::Mail <http://pear.php.net/package/Mail> to send mail
// notice absolute and relative paths are not necessary when using PEAR classes
require_once("Mail.php");

try {
	// verify the form was submitted OK
	if (@isset($_POST["firstName"]) === false || @isset($_POST["lastName"]) === false || @isset($_POST["email"]) === false) {
		throw(new RuntimeException("form variables incomplete or missing"));
	}

	// verify the CSRF tokens
	if(verifyCsrf($_POST["csrfName"], $_POST["csrfToken"]) === false) {
		throw(new RuntimeException("CSRF tokens incorrect or missing. Make sure cookies are enabled."));
	}

	// verify the passwords match
	if($_POST["password"] !== $_POST["confirmPassword"]) {
		throw(new RuntimeException("passwords do not match"));
	}

	// create a new salt and hash
	$salt = bin2hex(openssl_random_pseudo_bytes(32));
	$hash = hash_pbkdf2("sha512", $_POST["password"], $salt, 2048, 128);

	// create a User and Profile object and insert them into mySQL
	$pdo = connectToEncryptedMySQL("/etc/apache2/capstone-mysql/YOUR-PROJECT.ini");
	$activation = bin2hex(openssl_random_pseudo_bytes(16));
	$user = new User(null, $activation, $_POST["email"], $_POST["hash"], $salt);
	$user->insert($pdo);
	$profile = new Profile(null, $user->getUserId(), $_POST["firstName"], $_POST["lastName"]);
	$profile->insert($pdo);

	// email the user with an activation message
	$to = $user->getEmail();
	$from = "dmcdonald21@cnm.edu";

	// build headers
	$headers = array();
	$headers["To"] = $to;
	$headers["From"] = $from;
	$headers["Reply-To"] = $from;
	$headers["Subject"] = $profile->getFirstName() . " " . $profile->getLastName() . ", Activate your CNM STEMulus Coding Bootcamp Login";
	$headers["MIME-Version"] = "1.0";
	$headers["Content-Type"] = "text/html; charset=UTF-8";

	// build message
	$pageName = end(explode("/", $_SERVER["PHP_SELF"]));
	$url = "https://" . $_SERVER["SERVER_NAME"] . $_SERVER["PHP_SELF"];
	$url = str_replace($pageName, "activate.php", $url);
	$url = "$url?activation=$activation";
	$message = <<< EOF
<html>
	<body>
		<h1>Welcome to CNM STEMulus Coding Bootcamp</h1>
		<hr />
		<p>Thank you for signing up for a CNM STEMulus Coding Bootcamp Login. Visit the following URL to complete your registration process: <a href="$url">$url</a>.</p>
	</body>
</html>
EOF;

	// send the email
	error_reporting(E_ALL & ~E_STRICT & ~E_DEPRECATED);
	$mailer =& Mail::factory("sendmail");
	$status = $mailer->send($to, $headers, $message);
	if(PEAR::isError($status) === true)
	{
		echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>Oh snap!</strong> Unable to send mail message:" . $status->getMessage() . "</div>";
	}
	else
	{
		echo "<div class=\"alert alert-success\" role=\"alert\"><strong>Sign up successful!</strong> Please check your Email to complete the signup process.</div>";
	}

} catch(Exception $exception) {
	echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>Oh snap!</strong> Unable to sign up: " . $exception->getMessage() . "</div>";
}
?> 