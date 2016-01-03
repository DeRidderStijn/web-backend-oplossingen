<?php
	function __autoload($classname){
		$filename = "classes/". $classname .".php"; /*laad automatisch classes op locatie van de filename */
    	include_once($filename);
	}
	
	$dog = new Animal("sparkles","male",100);
	$dolphin = new Animal("flipper", "male", 120);
	$cat = new Animal("fluffy","female",90);

	$simba = new Lion("Simba", "male", 100, "Congo lion");
	$kenia = new Lion("Kenia", "male", 100, "Kenia lion");

	$zeke = new Zebra("Zeke", "male", 100, "Quagga");
	$zana = new Zebra("zana", "male", 100, "Selous");

	$dog->changeHealth(+10);
	$dolphin->changeHealth(-10);
	$cat->changeHealth(-20);


?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>classes extended</title>
</head>

<body>
<p><?php echo $dog->getName() ?> is van het geslacht <?php echo $dog->getGender() ?> en heeft momenteel <?php echo $dog->getHealth() ?> special move: <?php echo $dog->doSpecialMove() ?></p>
<p><?php echo $dolphin->getName() ?> is van het geslacht <?php echo $dolphin->getGender() ?> en heeft momenteel <?php echo $dolphin->getHealth() ?> special move: <?php echo $dolphin->doSpecialMove() ?> </p>
<p><?php echo $cat->getName() ?> is van het geslacht <?php echo $cat->getGender() ?> en heeft momenteel <?php echo $cat->getHealth() ?> special move: <?php echo $cat->doSpecialMove() ?> </p>

<p>De speciale move van <?php echo $simba->getName() ?> (soort: <?php echo $simba->getSpecies() ?>): <?php echo $simba->doSpecialMove() ?>
<p>De speciale move van <?php echo $kenia->getName() ?> (soort: <?php echo $kenia->getSpecies() ?>): <?php echo $kenia->doSpecialMove() ?>

<p>De speciale move van <?php echo $zeke->getName() ?> (soort: <?php echo $zeke->getSpecies() ?>): <?php echo $zeke->doSpecialMove() ?>
<p>De speciale move van <?php echo $zana->getName() ?> (soort: <?php echo $zana->getSpecies() ?>): <?php echo $zana->doSpecialMove() ?>
</body>
</html>