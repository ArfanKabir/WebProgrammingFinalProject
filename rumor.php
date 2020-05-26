<?php
include ('NRR.php');
$userInput = $_GET['rumor'];

$File = "rumor.txt";
$lines = file($File);
$outputLine = $lines[$userInput];
$outputArray = explode(',', $outputLine);
$title = $outputArray[0];
$rumor = $outputArray[1];
$rumorSource = $outputArray[2];
$rumorDate = $outputArray[3];
$userPosted = $outputArray[4];
?>
	
		<h1><?= $title ?></h1>
		<span class = "rumorDisp">
			<p><?= $rumor ?></p>
		</span>
		<a href ="http://<?= $rumorSource ?>">Source</a>
		<p>Date posted: <?= $rumorDate?></p>
		<p>User that posted: <?= $userPosted ?></p>
		
<?php include("bottom.html") ?>