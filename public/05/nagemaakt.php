<?php
function mijnPrint($printText)
{
    print("$printText");
    print("<br>");
}
mijnPrint("regel 1");

mijnPrint("regel 2");

mijnPrint("regel 3");



//vraag 1: ik denk dat ik een error krijg omdat de variabele geen argument heeft
$antwoord = "ik denk dat ik een error krijg omdat de variabele geen argument heeft";
print($antwoord);   
echo "<br>";
$dezeGaatMee = "deze waarde wordt meegenomen";
mijnPrint($dezeGaatMee);
?>


