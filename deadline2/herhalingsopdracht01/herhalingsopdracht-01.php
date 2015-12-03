<?php
/*
Stijn De Ridder
stijn.deridder.1@student.kdg.be
*/
$selected="none";
$pathVoorbeelden = "D:/school/WebBackEnd/cursus/public/cursus/voorbeelden";
$pathOpdrachten = "D:/school/WebBackEnd/oplossingen";

if (isset($_GET["link"]))
   {
      switch($_GET["link"])
      {
         case "cursus":
            $selected="cursus";
                    break;

         case "voorbeelden":
            $selected="voorbeelden";
         //code to execute
         break;

         case "opdrachten":
            $selected="opdrachten";
         //code to execute
         break;

      }
   }

   function zoekbestanden($map, $pathVoorbeelden, $pathOpdrachten)
   {
      $path ='';
      if ($map == "voorbeelden")
      {
         //$path = "D:/school/WebBackEnd/cursus/public/cursus/voorbeelden";
         $path = $pathVoorbeelden;
      }
      elseif ($map == "opdrachten")
      {
         //$path = "D:/school/WebBackEnd/oplossingen";
         $path = $pathOpdrachten;
      }
      $files = scandir($path,1);
      echo "<ul>";
         foreach ($files as $file)
         {
            echo "<li>" . $file . "</li>";
         }
      echo "</ul>";
   }
   

   function searchFiles($zoekterm, $pathVoorbeelden, $pathOpdrachten)
   {
      $voorbeelden = scandir($pathVoorbeelden,1);
      $opdrachten = scandir($pathOpdrachten,1);
      $result = array_merge($voorbeelden, $opdrachten);
      $count = 0;
      echo "<ul>";
      foreach ($result as $item)
      {
         if (strpos($item, $zoekterm) !== false)
         {
            echo "<li>" . $item . "</li>";
            $count += 1;
         }
      }
      echo "</ul>";
      if ($count == 0)
      {
         echo "spijtig, geen zoekresultaten gevonden voor " . $zoekterm . "!";
      }

   }
?>

<!DOCTYPE html>
<html>
   <head>
      <title>herhalingsopdracht 01</title>
      <style>
         
      </style>
   </head>
   <body>
      <h1>Indexpagina</h1>
      <ul>
         <li> <a href="herhalingsopdracht-01.php?link=cursus">Cursus</a> </li>
         <li> <a href="herhalingsopdracht-01.php?link=voorbeelden">Voorbeelden</a> </li>
         <li> <a href="herhalingsopdracht-01.php?link=opdrachten">Opdrachten</a> </li>
      </ul>

      <form action="herhalingsopdracht-01.php" action="GET">
         <label>zoek naar:</label>
         <input type="text" id="zoekterm" name="zoekterm" value="geef een zoekterm in"> </input>
         <input type="submit">
      </form>

      <?php 
      if ($selected == "cursus")
      {
         echo "<iframe src='web-backend-intro.pdf' height='750px' width='1000px'>";
         
      } 
      elseif ($selected == "voorbeelden" || $selected == "opdrachten")
      {
         echo "<h2>Index van de " . $selected . " </h2>";
         zoekBestanden($selected, $pathVoorbeelden, $pathOpdrachten);
      }

      if ( isset ( $_GET['zoekterm'] ) ) 
      {
         $zoekterm = $_GET["zoekterm"];
         searchFiles($zoekterm, $pathVoorbeelden, $pathOpdrachten);
      }

      ?>
   </body>
</html>