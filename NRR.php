<!DOCTYPE html>
<?php session_start(); ?>
<html>
	<head>
		<title>Nintendo Rumor Roundup</title>
		<link href = "roundup.css" type = "text/css" rel = "stylesheet"> 
	</head>
	<body>
		<div class = "header">
			<img src = "Nintendo-banner-edited.png" alt = "Banner" >
		</div>
			<ul>
				<li>
					<a href = "home.php">Home</a>
				</li>
				<li>
					<a href = "submit-a-rumor.php">Sumbit a Rumor</a>
				</li>
				<div class = "shifted">
				<li>
					<a href = "contact.php">Contact us</a>
				</li>
				<li>
					<a href = "signup.php">Sign Up</a>
				</li>
				<li>
					<a href = "login.php"><?php
					if(isset($_SESSION['username'])){
					?>
					Logout 
					<?php
					}
					else{
					?>
					Log in
					<?php
					}
					?>
					</a>
				</li>
				<li>
				<div class = "topnav">
					<form action = "search2.php" method = "get">
						<input type = "text" name = "search" placeholder = "Search for a rumor">
						<input type = "hidden" id = "sumbitButton" value = "Search"/>

					</form>
				</div>
				</li>
			</ul>
		</div>
			