<?php

include("NRR.html");

$num = $_GET['rumor'];

$rumors = file_get_contents("rumor.txt");

$rumorsArray = explode("\n", $rumors);

for ($i = 0; $i < count($rumorsArray); $i++){
	if($i == $num){
		$foundRumor = $rumorsArray[$i];
	}
}

$foundRumorArray = explode(",", $foundRumor);

$title = $foundRumorArray[0];
$rumorText = $foundRumorArray[1];
$source = $foundRumorArray[2];
$date = $foundRumorArray[3];
$usernamePosted = $foundRumorArray[4];

?>

<h1><?= $title ?></h1>
<p>Description of rumor: <?= $rumorText ?></p>
<a href = <?= $source ?> >Source</a>
<p>Date posted: <?= $date ?></p>
<p>User who posted: <?= $usernamePosted ?>

<?php include("bottom.html") ?>