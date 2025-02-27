<?php
$titel = 'Een php html voorbeeld pagina';
$URL = '/assets/images/MarioNSMBWii.webp';
$auteur = 'user150434';
$alt = 'mario'; 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?= "<h1> $titel <h1>" ;?>
    </main>
    <section>
        <?php echo "<img src='$URL' alt='$alt'>";?>
        
    </section>

    <section>
        <?= "<h1> Auteur: $auteur</h1>";?>
    </section>
</body>
</html>