<?php
$standaardString = 'hello world<br>';
$extraString = 'extra world <br>';
$voornaam = 'luigi';
$achernaam = 'mario';
$fullnaam = $voornaam . " " . $achernaam . "<br>";
$naam = 'Yoshi';
$ondertekentdoor = 'directeur bowser';
$enemy = "koopa troopa";
echo $standaardString;
echo $extraString;
echo $fullnaam;
echo '<br>';


$emailtekst = "Beste $naam <br>
Helaas moeten wij uw verzoek afwijzen.<br>
Onze $enemy vinden het niet leuk om opgegeten te worden<br>
<br>
Hoogachtend<br>
$ondertekentdoor<br>
<br>
PS:<br>
De princess is in haar kasteel... voor nu :>";
echo $emailtekst;


?>