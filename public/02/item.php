<?php
$naam = 'The Dragon Chang';
$stat1 = '+100% Damage To Undead';
$stat2 = '+10 to Minimum Damage';
$stat3 = 'Adds 3-6 Fire Damage';
$stat4 = '+35 to Attack Rating';
$stat5 = '+2 To Light Radius';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= "<h1> weapon: $naam</h1>";?>
    <?= "<p> $stat1 </p>";?>
    <?= "<p> $stat2 </p>";?>
    <?= "<p> $stat3 </p>";?>
    <?= "<p> $stat4 </p>";?>
    <?= "<p> $stat5 </p>";?>
</body>
</html>