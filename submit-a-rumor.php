<?php

include("NRR.php");

if(isset($_SESSION['username'])){
?>
	<form action = "submit-rumor-submit.php" method = "post">
		<fieldset>
		
			<legend><h1>Submit a Rumor</h1></legend>
			
			<!-- gets title -->
			<label><strong>Title:</strong></label>
			<input type = "text" name = "title" size = "30" maxlength = "50" /> <br/> <br/>
			<div class = "rumorBox">
				<!-- gets rumor -->
				<label><strong>Rumor:</strong></label>
				<textarea name = "rumor" rows = "4" cols = "50" placeholder = "Type the rumor here..." ></textarea> <br/> <br/>
			</div>
			<!-- gets source -->
			<label><strong>Source:</strong></label>
			<input type = "text" name = "source" placeholder = "www.website.com" size = "30" maxlength = "3000" /> <br/> <br/>
			
			<input type = "submit" value = "Submit"/>
		</fieldset>
	</form>


<?php
}
else{
?>

<h1>Sorry</h1>

<p>You must be signed in to submit a rumor. Please <a href = "login.php">click here</a> to log in.</p>

<?php
}

include("bottom.html");
?>