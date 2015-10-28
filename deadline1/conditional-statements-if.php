<?php
/*
Stijn De Ridder
stijn.deridder.1@student.kdg.be
*/
$getal = "5";
$dag;

if ($getal == 1)
{
	$dag = "maandag";
}
else if ($getal == 2)
{
	$dag = "dinsdag";
}
else if ($getal == 3)
{
	$dag = "woensdag";
}
else if ($getal == 4)
{
	$dag = "donderdag";
}
else if ($getal == 5)
{
	$dag = "vrijdag";
}
else if ($getal == 6)
{
	$dag = "zaterdag";
}
else if ($getal == 7)
{
	$dag = "zondag";
}
?>

<!DOCTYPE html>
<html>
   <head>
      <title>opdracht comments</title>
   </head>
   <body>
    	<p>Dag: <?php echo($dag); ?></p>
   </body>
</html>