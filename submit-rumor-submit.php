<?php

	include("NRR.php");
	$file = fopen('rumor.txt','a');
	
	$title = $_POST['title'];
	$rumor = $_POST['rumor'];
	$source = $_POST['source'];
	$user = $_SESSION['username'];
	
	$date = date("m-d-Y");
	
	$title = $title.",";
	$rumor = $rumor.",";
	$source = $source.",";
	$date = $date.",";
	$user = $user."\n";
	
	file_put_contents("rumor.txt", $title, FILE_APPEND);
	file_put_contents("rumor.txt", $rumor, FILE_APPEND);
	file_put_contents("rumor.txt", $source, FILE_APPEND);
	file_put_contents("rumor.txt", $date, FILE_APPEND);
	file_put_contents("rumor.txt", $user, FILE_APPEND);
	
	fclose($file);

?>

<h1>Thank you for submitting.</h1>
<p>Please return to the <a href = "home.php">home page</a> to see all rumors.</p>


<?php include("bottom.html"); ?>