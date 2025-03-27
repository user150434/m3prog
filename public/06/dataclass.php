<?php
header("Content-Type: application/json");
class student 
{
    public $name;
    public $gemiddeldCijfer;
}

class dataObject
{
    public $studenten = [];
}


$mario = new student();
$mario->name = "mario";
$mario->gemiddeldCijfer = 7.5;

$bowser = new student();
$bowser->name = "bowser";
$bowser->gemiddeldCijfer = 3.5;

$toad = new student();
$toad->name = "toad";
$toad->gemiddeldCijfer = 6.5;

$peach = new student();
$peach->name = "peach";
$peach->gemiddeldCijfer = 8.5;

$dataObject = new dataObject();
$dataObject->studenten = [$mario,$bowser,$toad,$peach];


echo json_encode($dataObject);