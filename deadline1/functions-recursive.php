<?php
/*
Stijn De Ridder
stijn.deridder.1@student.kdg.be
*/
$counter = 1;
$investering = 100000;
$rente = 1.08;
$gebruikerHans = array(1, 100000, 1.08);
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
berekenRente($gebruikerHans[0], $gebruikerHans[1], $gebruikerHans[2]);
?>

<!DOCTYPE html>
<html>
   <head>
      <title>functions recursive</title>
   </head>
   <body>

   </body>
</html>