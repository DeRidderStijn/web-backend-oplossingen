<?php
/*
Stijn De Ridder
stijn.deridder.1@student.kdg.be
*/
$dieren = array("kat", "hond", "vogel", "slang", "dolfijn", "miereneter");
$count = count($dieren);
$teZoekenDier ="vogel";
$message = "";
if (in_array($teZoekenDier, $dieren)) {
   	$message = "gevonden";
}
else
{
	$message = "niet gevonden";
}
?>

<!DOCTYPE html>
<html>
   <head>
      <title>opdracht comments</title>
   </head>
   <body>
      <p>het dier: <?php echo($teZoekenDier); ?> is <?php echo($message) ?></p>
   </body>
</html>