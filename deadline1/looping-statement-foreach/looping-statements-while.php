<?php
/*
Stijn De Ridder
stijn.deridder.1@student.kdg.be
*/
$text = file_get_contents('text-file.txt');
$textChars = str_split($text);
$textChars = array_reverse($textChars);
asort($textChars);

$nrOfChars = count_chars($text,3);
echo "the number of diffirent chars is:", strlen($nrOfChars) ,"<br>";
foreach (count_chars($text, 1) as $i => $val) {
   echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
}

//source: http://php.net/manual/en/function.count-chars.php

?>

<!DOCTYPE html>
<html>
   <head>
      <title>opdracht comments</title>
   </head>
   <body>
   

   </body>
</html>