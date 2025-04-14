<?php

class Artiekel
{
    public $naam;
    public $prijs;
    public $voorraad;
};

$game = new Artiekel();
$game->naam = "mario";
$game->prijs = 39.99;
$game->voorraad = 75;

echo "<br>";
print_r($game);