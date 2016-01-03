<?php
	function __autoload($classname){
		$filename = "classes/". $classname .".php"; /*laad automatisch classes op locatie van de filename */
    	include_once($filename);
	}
	$getal1 = 150;
	$getal2 = 100;
	$percent = new Percent($getal1,$getal2);
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>classes begin </title>
    <style>
    table{
    	border-style:double;
    }
    tr td{
    	border-style: solid;
    }
    </style>
</head>

<body>
<p>hoeveel percent is <?php echo $getal1 ?> van <?php echo $getal2 ?></p>
<table>
  	<tr>
	    <td>absoluut</td>
	    <td><?php echo $percent->absolute ?></td>
	</tr>
<tr>
    <td>relatief</td>
    <td><?php echo $percent->relative ?></td>
</tr>
<tr>
    <td>Geheel getal</td>
    <td><?php echo $percent->hundred ?></td>
</tr>
<tr>
    <td>nominaal</td>
    <td><?php echo $percent->nominal ?></td>
  </tr>
 
</table> 

</body>
</html>