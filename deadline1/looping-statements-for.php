<?php
/*
Stijn De Ridder
stijn.deridder.1@student.kdg.be
*/

?>

<!DOCTYPE html>
<html>
   <head>
      <title>opdracht comments</title>
      <style>
      	.green{background-color: green;}
      </style>
   </head>
   <body>
      <table>
      <?php 
      	for ($x = 0; $x <= 10; $x++) { ?>
    		<tr>
    			<?php for ($y = 0; $y <= 10; $y++) { ?>
				<td>kolom</td>
				<?php } ?>
    		</tr>
		<?php } 
      ?>
      </table>


      <table>
      <?php for ($x = 0; $x <= 10; $x++) { ?>
      	<tr>
      		<?php for ($y = 0; $y <= 10; $y++)
      		{ 
      			if (($x * $y) %2 == 0)
      			{ ?>
      				<td><?php echo($x * $y); ?></td> <?php
      			}
      			else
      			{ ?>
      				<td class="green"><?php echo($x * $y); ?></td> <?php
      			}
      		} ?>
      	</tr>

      <?php } ?>
      </table>
   </body>
</html>