<?php
/*
Stijn De Ridder
stijn.deridder.1@student.kdg.be
*/
$jaartal = 81;
$schrikkeljaar;

if (($jaartal % 4) == 0)
{
	if ($jaartal % 100 == 0)
	{
		if ($jaartal % 400 == 0)
		{
			$schrikkeljaar = "Is een schrikkeljaar";
		}
		else
		{
			$schrikkeljaar = "Is geen schrikkeljaar";
		}
	}
	else
	{
		$schrikkeljaar = "Is een schrikkeljaar";
	}
	
}
else
{
	$schrikkeljaar = "Is geen schrikkeljaar";
}

?>

<!DOCTYPE html>
<html>
   <head>
      <title>opdracht comments</title>
   </head>
   <body>
      <p> Het jaartal: <?php echo($jaartal); ?> <?php echo($schrikkeljaar) ?> </p>
   </body>
</html>