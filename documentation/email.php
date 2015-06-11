<?php
$field_name = $_POST["textName1"];
$field_email = $_POST["email1"];
$field_message = $_POST["txtareaComments"];
$mail_to = "orchard.laura@gmail.com";
$subject = "Message for Laura Orchard Web Development".$field_name;
$body_message = "From: " . $field_name . "\n";
$body_message .= "E-mail: " . $field_email . "\n";
$body_message .= "Message: " . $field_message;
$headers = "From: " . $field_email . "\r\n";
$headers .= "Reply-To: " . $field_email . "\r\n";
$mail_status = mail($mail_to, $subject, $body_message, $headers);
if ($mail_status) { ?>
	<script language="javascript" type="text/javascript" id="email-sent">
		alert("Your email was sent!");
		//		alter the below location once this is migrated to production
		window.location = "thankyou.php";
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert("Message failed. Please send an e-mail to artist@lauraorchard.com");
		window.location = "contact-page.php";
	</script>
<?php
}
?>