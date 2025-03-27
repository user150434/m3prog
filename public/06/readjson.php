<?php

$steden = [
    "Amsterdam", 
    "Rotterdam", 
    "Utrecht"
];

$jsonstring = json_encode($steden); 
$stedenRead = json_decode($jsonstring);

print_r($stedenRead);



$json = '{
    "studenten": [
      {
        "name": "mario",
        "gemiddeldCijfer": 7.5
      },
      {
        "name": "wario",
        "gemiddeldCijfer": 4.5
      }
    ]
  }';

$dataobject = json_decode($json);
echo "<br>";
print_r($json);
echo "<br>";
echo $dataobject -> studenten[0] -> name;
echo "<br>";
echo $dataobject -> studenten[1] -> gemiddeldCijfer;
