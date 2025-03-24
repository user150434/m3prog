<?php
$totaalBesteld = 400.0;
$verzendKosten = 3.50;
$korting = 0.00;
$cadeautje = false;


if($totaalBesteld >= 100)
{
    $verzendKosten = 0;
}

if($totaalBesteld >= 250)
{
    $korting = 0.05;
}

if($totaalBesteld >= 400)
{
    $cadeautje = true;
}


$totaal = $totaalBesteld - ($korting*$totaalBesteld) + ($verzendKosten);

if($cadeautje)
{
    echo "U krijgt ook een cadeautje ter waarde van 10 euro<br>";
}


echo "Totaal van de bestelde artiekelen $totaalBesteld <br>";
echo "Totaal met de verzendkosten wordt het $totaal <br>";






?>
