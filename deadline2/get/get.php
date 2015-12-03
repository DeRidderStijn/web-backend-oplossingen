<?php
/*
Stijn De Ridder
stijn.deridder.1@student.kdg.be
*/
$id;
$artikels = array(
					array(	"titel" => "Busbestuurder sterft in crash",
							"datum" => "25/11/15",
							"inhoud" => "Rond 13.30 uur is in Pittem een trein met een lijnbus gebotst. Daarbij is de busbestuurster om het leven gekomen, bevestigt woordvoerster Inge Debruyne van De Lijn in West-Vlaanderen. Enkele treinwagons zijn ontspoord. De schade aan de infrastructuur is groot. ",
						   	"afbeelding" => "bus.jpg",
						   	"afbeeldingBeschrijving" => "Foto van de bus na het ongeval",
						   	"key" => 0
						   	),

					array(	"titel" => "Tot zondag geen concerten in AB en botanique, ook vorst schrapt concerten",
							"datum" => "25/11/15",
							"inhoud" => "Tot zondag gaan er geen concerten door in de Ancienne Belgique en de Botanique. Vorst Nationaal annuleert morgen, vrijdag en zaterdag concerten. Dat delen de drie Brusselse concertzalen vandaag mee. Oorzaak is de verhoogde terreurdreiging.",
							"afbeelding" => "ab.jpg",
						   	"afbeeldingBeschrijving" => "Artiest die normaal in ab zou moeten spelen",
						   	"key" => 1
							),

					array( 	"titel" => "Van Rode Duivel naar snelheidsduivel",
							"datum" => "25/11/15",
							"inhoud" => "Marouane Fellaini mag op zoek naar een chauffeur. De Rode Duivel is op het veld niet de snelste van het pak, maar weet in zijn auto het gaspedaal wel staan. 'Big Fella' werd op zes minuten tijd twee keer betrapt op te snel rijden en moet zijn rijbewijs nu voor negen maanden inleveren. ",
							"afbeelding" => "felaini.jpg",
						   	"afbeeldingBeschrijving" => "Felaini in zijn auto",
						   	"key" => 2
							),

					);

if (isset($_GET["id"]))
   {
   		$id = $_GET["id"];
   }
//var_dump($artikels);
?>

<!DOCTYPE html>
<html>
   <head>
      <title>get</title>
      <style>
      	
      </style>
   </head>
   <body>
   		<?php
   			foreach($artikels as $artikel)
   			{
   				echo ("<h3>" . $artikel["titel"] . "</h3>");
   				echo ("<img src=' images/". $artikel["afbeelding"] . "' alt='" . $artikel["afbeeldingBeschrijving"] . "'>");
   				//echo ("<p>" . substr($artikel["inhoud"],0,50) . "...<br><a href='index.php?id=0'> lees meer </a> <p>");
   				if ($id == $artikel["key"])
   				{
   					echo ("<p>"	. ($artikel["inhoud"]) . "</p>");
   				}
   				else
   				{
   					echo ("<p>"	. substr($artikel["inhoud"],0,50) . "...<br><a href='get.php?id=" . ($artikel["key"]) . "'> lees meer </a> </p>");
   				}
   				echo ("<p>" . $artikel["datum"] . "<p>");
   			}
   		?>
   </body>
</html>