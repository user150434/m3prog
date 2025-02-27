<?php
$typegerecht = 'hoofdgerecht';
$naamgerecht = 'pizza';
$prijs = 10;
$beschrijving = 'lekkere pizza';
$ingredientenlijst = 'tomaten, kaas, deeg';
$allergenenLijst = 'gluten, lactose';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= "<p>  Gerecht type: $typegerecht<br>
  <br>
  $naamgerecht €$prijs<br>
  <br>
  $beschrijving<br>
  Ingegredientenlijst:<br>
  $ingredientenlijst<br>
  <br>
  Bent u allergisch? bekijk dan hieronder de allergenen:<br>
  $allergenenLijst <br></p>" ;?>
    
</body>
</html>