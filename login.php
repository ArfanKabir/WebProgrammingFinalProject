<?php include("NRR.php"); ?>

<div>
<?php
if(isset($_SESSION['username'])){ ?>
	<h1>Logout</h1>
	<p>You are currently logged in under <?= $_SESSION['username'] ?> </p>
	<p>If you wish to logout, please click the logout button below</p>
	<form action = "logout.php" method = "post">
		<input type = "submit" value = "Logout"/>
	</form>
<?php
}
else{ ?>
	<h1> Log in to the Nintendo Rumor Roundup </h1>
	<form action = "login-submit.php" method = "post">
		<fieldset>
			<legend>Login Information</legend>
			<label class = "heading"><strong>Username: </strong></label>
			<input type = "text" name = "username" size = "20" maxlength = "20" autofocus = "autofocus" required = "required"/><br/><br/>
			<label class = "heading"><strong>Password: </strong></label>
			<input type = "password" name = "password"><br/></br>
			<input type  = "submit" value = "Log In"/>
		</fieldset>
	</form>
	<a href = "signup.php">Don't have an account? Sign Up Here</a>
<?php
}
?>

</div>

<?php include("bottom.html"); ?>