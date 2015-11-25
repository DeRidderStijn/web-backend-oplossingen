<?php
/*
Stijn De Ridder
stijn.deridder.1@student.kdg.be
*/
$counter = 1;
$investering = 100000;
$rente = 1.08;

function berekenRente($counter, $investering, $rente)
{
	$bedrag = floor($investering * $rente);
	echo ("<p>het bedrag na " . $counter . "jaar bedraagd: ". $bedrag);
	if($counter < 10)
	{
		$counter++;
		berekenRente($counter, $bedrag, $rente);
	}
}
berekenRente($counter, $investering, $rente);
?>

<!DOCTYPE html>
<html>
   <head>
      <title>functions recursive</title>
   </head>
   <body>

   </body>
</html>