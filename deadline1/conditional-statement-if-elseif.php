<?php
/*
Stijn De Ridder
stijn.deridder.1@student.kdg.be
*/
$getal = 40;
$message;

if ($getal < 10)
{
	$message = "Het getal ligt tussen 0 en 10";
}
elseif ($getal < 20)
{
	$message = "Het getal ligt tussen 10 en 20";
}
elseif ($getal < 30)
{
	$message = "Het getal ligt tussen 20 en 30";
}
elseif ($getal < 40)
{
	$message = "Het getal ligt tussen 30 en 40";
}
elseif ($getal < 50)
{
	$message = "Het getal ligt tussen 40 en 50";
}
elseif ($getal < 60)
{
	$message = "Het getal ligt tussen 50 en 60";	
}
elseif ($getal < 70)
{
	$message = "Het getal ligt tussen 60 en 70";
}
elseif ($getal < 80)
{
	$message = "Het getal ligt tussen 70 en 80";
}
elseif ($getal < 90)
{
	$message = "Het getal ligt tussen 80 en 90";
}
elseif ($getal < 100)
{
	$message = "Het getal ligt tussen 90 en 100";
}
$message = strrev($message);
?>


<!DOCTYPE html>
<html>
   <head>
      <title>opdracht comments</title>
   </head>
   <body>
      <p> <?php echo($message) ?> </p>
   </body>
</html>