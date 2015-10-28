<?php
/*
Stijn De Ridder
stijn.deridder.1@student.kdg.be
*/
$boodschappenlijstje = array('patatjes', 'chips', 'cola', 'bier', 'fruit');

$i = 1;
while ($i <= 100) {
	if ($i < 100)
	{
		echo $i. ', ';
	}
	else
	{
		echo $i;
	}
	$i++;	
}
echo "<br>";
$j = 40;
while ($j <= 80)
{
	if($j % 3 == 0)
	{
		echo $j. ' ';
	}
	$j++;
}
?>

<!DOCTYPE html>
<html>
   <head>
      <title>opdracht comments</title>
   </head>
   <body>
      <ul>
      	<?php 
      		foreach ($boodschappenlijstje as $value) {
      			?>
      		<li><?php echo($value) ?></li>
      		<?php
		} ?>
      </ul>
   </body>
</html>