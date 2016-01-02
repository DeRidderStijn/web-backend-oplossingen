<?php
/*
Stijn De Ridder
stijn.deridder.1@student.kdg.be
*/
setlocale(LC_ALL, 'nld_NLD');
$time = mktime(22,35,25,01,21,1904); //mktime — Get Unix timestamp for a date
$date =	strftime("%d %B %Y, %H:%M:%S %p", $time);?>

<!DOCTYPE html>
<html>
   <head>
      <title>date</title>
      <style>
      	
      </style>
   </head>
   <body>
   		<p> timestamp: <?php echo $time ?></p>
		<p> datum: <?php echo $date ?></p>
   </body>
</html>