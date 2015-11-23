<?php
/*
Stijn De Ridder
stijn.deridder.1@student.kdg.be
*/
function berekenSom($getal1, $getal2)
{
	$resultaat = $getal1 + $getal2;
	return $resultaat;
}
function vermenigvuldig($getal1, $getal2)
{
	$resultaat = $getal1 + $getal2;
	return $resultaat;
}
function isEven($getal1)
{
	$even = true;
	if ($getal1 % 2 == 0)
	{
		$even = true;
	}
	else
	{
		$even = false;
	}
	return $even;
}

echo "de som is ", (berekenSom(5,6)), "<br>";
echo "de uitkomst van de vermenigvuldiging is ", (vermenigvuldig(5,6)), "<br>";
if (isEven(5) == true)
{
	echo " het ingegeven getal is even";
}
else
{
	echo "het ingegeven getal is oneven";
}
// echo isEven toont geen true of false

?>

<!DOCTYPE html>
<html>
   <head>
      <title>functions</title>
   </head>
   <body>

   </body>
</html>