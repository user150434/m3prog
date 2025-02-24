<?php

$getal = 100.68999;
$afgerond1 = round($getal);
echo "Als je $getal afrond dan krijg je: $afgerond1";
echo "<br>";
$getal2 = 100.18999;
$afgerond2 = ceil($getal2);
echo "Als je $getal2 afrond dan krijg je: $afgerond2";
echo "<br>";



$random1 = rand(1, 100);
$random2 = rand(1, 100);
$random3 = rand(1, 100);

echo $random1 + $random2;
echo "<br>";
echo "Random getal 3: $random3";
echo "<br>";

?>