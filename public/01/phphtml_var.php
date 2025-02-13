<?php
$leeftijd = 99;
$title = "mijn favoriete game";
$datum = date('d-m-Y');
$tijd = date("H:i");
$mijnfavorietegame = "fortnite";
$mooistegetal = 7;
$mooistekleur = "rood";
$favorietefilm = "shrek";

$loodsNummer = "15A";
//en nu naar een andere loods:
$loodsNummer = "16A";

?>


<!doctype html>
<html lang="en">
    <head>
        <title><?php echo $title ?></title>
    </head>
    <body>

        <h2>De datum vandaag is: <?php echo $datum ?>,
         en de tijd is <?php echo $tijd ?> uur.
        
        <p><h2>Mijn favoriete game:</h2><?php echo $mijnfavorietegame?></p>
        <p><h2>mooistegetal:</h2><?php echo $mooistegetal?></p>
        <p><h2>favorietefilm:</h2><?php echo $favorietefilm?></p>
        <p><h2>mooistekleur:</h2><?php echo $mooistekleur?></p>
    </body>
</html>