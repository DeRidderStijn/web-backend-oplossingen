<?php
/*
Stijn De Ridder
stijn.deridder.1@student.kdg.be
*/

$getal = 5;
$dag;

switch ($getal)
{
	case 1:
	$dag = "maandag";
	break;

	case 2:
	$dag = "dinsdag";
	break;

	case 3:
	$dag = "woensdag";
	break;

	case 4:
	$dag = "donderdag";
	break;

	case 5:
	$dag = "vrijdag";
	break;

	case 6:
	$dag = "zaterdag";
	break;

	case 7:
	$dag = "zondag";
	break;

	default:
	$dag = "foutief";
}

?>

<!DOCTYPE html>
<html>
   <head>
      <title>opdracht comments</title>
   </head>
   <body>
      <p>De dag die bij het getal <?php echo($getal); ?> hoort is: <?php echo($dag);?> </p>
   </body>
</html>