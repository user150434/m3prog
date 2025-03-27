<?php
header("Content-Type: application/json");

$steden = [
    "Amsterdam", 
    "Rotterdam", 
    "Utrecht"
];

$jsonstring = json_encode($steden); 
echo $jsonstring;


?>