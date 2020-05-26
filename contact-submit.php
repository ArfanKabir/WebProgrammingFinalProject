<?php

	include("NRR.php");

	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$email = $email.",";
	$message = $message."\n";
	
	file_put_contents("contact.txt", $email, FILE_APPEND);
	file_put_contents("contact.txt", $message, FILE_APPEND);

?>

<h1>Thank you!</h1>
<p>We should be contacting you shortly to respond to your message.</p>

<?php include("bottom.html"); ?>