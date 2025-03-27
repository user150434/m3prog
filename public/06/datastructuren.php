<?php
header("Content-Type: application/json");
$film = [
    'film' => [
        "title" => "The Godfather",
        "details" => [
            "director" => "Francis Ford Coppola",
            "rating" => 9.2,
            "year" => 1972
        ]   
    ]    
];

$film = json_encode($film);

echo $film;