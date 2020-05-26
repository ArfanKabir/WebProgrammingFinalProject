<?php
include ('NRR.php');
$userInput = $_GET['search'];
$searchthis = $userInput;
$matches = array();

$handle = @fopen("rumor.txt", "r");
if ($handle)
{
	$i=0;
	$h=1;
    while (!feof($handle))
    {	
        $buffer = fgets($handle);
        if(stripos($buffer, $searchthis) !== FALSE)
		{
            $matches[] = $buffer;
			$comma=explode(',', $buffer);
			$commaTitle[$i] =  $comma[0];
			$lineNum[$i] = $h;
			$i = $i +1;
		}
		$h = $h +1;	
			
		
    }
    fclose($handle);
}
?>

<h1>Here's what we found when searching "<?= $userInput ?>":</h1>
<h1>
<?php
for ($j=0; $j<count($commaTitle); $j++)
{	
?>
<a href = "rumor.php?rumor=<?=$lineNum[$j] - 1;?>"><?=$commaTitle[$j];?></a><br/><br/>
<?php
}
?>
</h1>	

<?php include("bottom.html"); ?>