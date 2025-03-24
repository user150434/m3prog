<?php

$stoplicht= 'O';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

if($stoplicht == 'R')
{
    echo " <button style='background-color:#FF0000;height:25px;width:25px;'/>";
}
else if($stoplicht == 'O')
{
    echo " <button style='background-color:#FFFF00;height:25px;width:25px;'/>";
}
else
{
    echo " <button style='background-color:#00FF00;height:25px;width:25px;'/>";
}
?>

</body>
</html>