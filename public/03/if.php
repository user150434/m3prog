<?php
$opvoorraad = false;
$aantalOpVoorraad = 20;

$opvoorraad = $aantalOpVoorraad > 0;



if($opvoorraad == false)
{
    echo "niet op voorraad";
    echo "<br>";

}

if ($opvoorraad == 2)//() komt uit op false
{
    echo "artikel is wel op vooraad";
}
else
{
    echo "dit word niet op voorraad";    
}

?>
