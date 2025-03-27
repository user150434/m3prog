<?php
header("Content-Type: application/json");

$mario = [
    "name" => "mario",
    "gemiddeldCijfer" => 7.5
];
$wario = [
    "name" => "wario",
    "gemiddeldCijfer" => 4.5
];
$toad = [
    "name" => "toad",
    "gemiddeldCijfer" => 6.5
];
$bowser = [
    "name" => "bowser",
    "gemiddeldCijfer" => 3.5
];

$dataObject = ["studenten" => [$mario, $wario,$toad,$bowser]];

$dataObject = json_encode($dataObject);

echo $dataObject;