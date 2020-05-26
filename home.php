<?php

include("NRR.php");

$rumors = file_get_contents("rumor.txt");

$rumorsArray = explode("\n", $rumors);
?>

<h1>Welcome to Nintendo Rumor Roundup! Here are some of out latest rumors:</h1>

<?php

for ($i = count($rumorsArray) - 2; $i >= 0; $i--){ 

	$foundRumorArray = explode(",", $rumorsArray[$i]);

	$title = $foundRumorArray[0];
?>

	<h1><a href = "rumor.php?rumor=<?= $i ?>" ><?= $title ?></a></h1> <br/> <br/>
	
<?php
}

include("bottom.html");
?>