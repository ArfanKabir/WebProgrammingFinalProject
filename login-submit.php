<?php

include("NRR.php");

$username = $_POST['username'];
$password = $_POST['password'];

$users = file_get_contents("users.txt");

$usersArray = explode("\n", $users);

$true = 0;

for($i = 0; $i < count($usersArray) - 1; $i++){
	$current = $usersArray[$i];
	$currentLine = explode(",", $current);
	$tempName = $currentLine[1];
	$tempPassword = $currentLine[2];
	if($tempName == $username && $tempPassword == $password){ 
		$true = 1;
	}
}

if($true == 1){

$_SESSION['username'] = $username;
?>

<h1>Welcome back, <?= $username ?>!</h1>
<p>Please feel free to look through the rumors or even submit one of your own!</p>

<?php
}
else{
?>

<h1>Sorry, that username is not in our database</h1>
<p>Please click <a href = "signup.php">here</a> to sign up for an account</p>

<?php
}
?>

<?php include("bottom.html"); ?>