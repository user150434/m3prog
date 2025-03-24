<?php
$hoeLangIsDitWoord = "scrabbleWoord";
$woordLengte = strlen($hoeLangIsDitWoord);

$hoeLangIsDitWoord2 = "leeraar";
$woordLengte2 = strlen($hoeLangIsDitWoord2);
print($woordLengte2);
echo "<br>";
//vraag 1: strlen — Get string length
//vraag 2: The length of the string in bytes. 
//vraag 3: Returns the length of the given string.
//vraag 4: 7


$tweeMacht2 = pow(2,2);
$macht3 = pow(2,10);
print($macht3);

echo "<br>";	
$derdeMacht = pow(3,4);
print($derdeMacht);
print(pow(3,4));
//vraag 5: we geven het resultaat door met de print functie
//link: https://www.php.net/manual/en/function.strtoupper.php
echo "<br>";
$naam = "Mario";
$naamGroot = strtoupper($naam);
print($naamGroot);

echo "<br>";
$naamklein = "MARIO";
$naamGroot = mb_strtolower($naamklein);
print($naamGroot);

?>