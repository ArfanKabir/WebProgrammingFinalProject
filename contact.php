<?php include("NRR.php"); ?>
<div>
	<form action = "contact-submit.php" method = "post">
		<fieldset>
		
			<legend><h1>Contact Us</h1></legend>
			
			<!-- gets email -->
			<label><strong>Email:</strong></label>
			<input type = "text" name = "email" size = "30" maxlength = "30" /> <br/> <br/>
			
			<!-- gets message -->
			<label><strong>Message:</strong></label>
			<textarea name = "message" rows = "4" cols = "50" placeholder = "Type your message here..."></textarea>
			
			<input type = "submit" value = "Submit"/>
		</fieldset>
	</form>
</div>

<?php include("bottom.html"); ?>