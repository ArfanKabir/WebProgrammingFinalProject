<?php include("NRR.php"); ?>
<div>
	<?php
	$file = fopen('users.txt','a');
	$name = $_POST["name"];
	$disp = $_POST["disp"];
	$password = $_POST['password'];
	
	$users = file_get_contents("users.txt");

	$usersArray = explode("\n", $users);
	
	$true = 0;

	for($i = 0; $i < count($usersArray) - 1; $i++){
		$current = $usersArray[$i];
		$currentUser = explode(",", $current);
		$tempName = $currentUser[1];
		if($tempName == $disp){ 
			$true = 1;
		}
	}
	
	if($true == 1){
?>

	<h1>Sorry, that username has been taken</h1>
	<p>Click <a href = "signup.php">here</a> to go back to the sign in page</p>

<?php
	}
	
	else{
		$data = $name.",".$disp.",".$password."\n";
		file_put_contents("users.txt", $data, FILE_APPEND);
		$_SESSION['username'] = $disp;
?>

	<h1>
		Thank you!
	</h1>
	<p>
		Welcome to the Nintendo Rumor Roundup, <?=$name?>!
	</p>
	<p>
		Now, you are free to submit a rumor (please provide evidence and your uncle from Nintendo doesn't count)
	</p>
	
<?php
	fclose($file);
	}
?>
	
</div>

<?php include("bottom.html") ?>