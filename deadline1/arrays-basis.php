<?php
/*
Stijn De Ridder
stijn.deridder.1@student.kdg.be
*/
$dieren1 = array("kat", "hond", "vogel", "slang", "dolfijn", "miereneter", "giraf", "aap", "penguin", "stokstaartje");

$dieren2[0] = "kat";
$dieren2[1] = "hond";
$dieren2[2] = "vogel";
$dieren2[3] = "slang";
$dieren2[4] = "dolfijn";
$dieren2[5] = "miereneter";
$dieren2[6] = "giraf";
$dieren2[7] = "aap";
$dieren2[8] = "penguin";
$dieren2[9] = "stokstaartje";

$voertuigen['landvoertuigen'] = array('brommer', 'fiets', 'auto');
$voertuigen['watervoertuigen'] = array('boot');
$voertuigen['luchtvoertuigen'] = array('zweefvlieger');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
   <head>
      <title>opdracht comments</title>
   </head>
   <body>
      <p><?php var_dump($dieren1); ?></p>
      <p><?php var_dump($dieren2); ?></p>
      <p><?php var_dump($voertuigen); ?></p>
   </body>
</html>