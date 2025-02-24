<?php

$fahrenheit = 74;
$celsius = ($fahrenheit - 32) / 1.8;
echo "{$fahrenheit} graden Fahrenheit = {$celsius} graden Celsius. <br/>";
 

$celsius = 23;
$fahrenheit = ($celsius * 1.8) + 32;
echo "{$celsius} graden Celsius = {$fahrenheit} graden Fahrenheit. <br/>";
 

$celsius = 23;
$kelvin = $celsius + 273.15;
echo "{$celsius} graden Celsius = {$kelvin} Kelvin. <br/>";
 
$fahrenheit = 74;
$kelvin = ($fahrenheit - 32) / 1.8 + 273.15;
echo "{$fahrenheit} graden Fahrenheit = {$kelvin} Kelvin. <br/>";
?>
 
 
