<?php
	include("NRR.php");
?>
<div>
	<form action="signup-submit.php" method="post">
		<fieldset>
			<legend><h1>New User Signup</h1></legend>
			<label class="left"><strong>Full Name:</strong></label>
			<input type="text" name="name" size="16"/> <br/> <br/>
			<label class="left"><strong>Username:</strong></label>
			<input type="text" name="disp" size="10" maxlength="10"/> <br/> <br/>
			<label class="left"><strong>Password</strong></label>
			<input type="password" required name="password" size="10" maxlength="10" /> <br/> <br/>
			<input type="submit" value="Sign Up" />
		</fieldset>
	</form>
</div>
<?php include("bottom.html") ?>