<?php 
$valueOne = (float)$_POST['radio'];
$valueTwo = (float)$_POST['altura'];
$pi = (float)3.14;
$valueArea = ($valueOne * $valueOne) * $pi;
$valueVolumen = $pi  * ($valueOne * $valueOne) * $valueTwo;
echo "El área de la circunferencia es el siguiente  $valueArea" . PHP_EOL;
echo "El Volumen de la circunferencia es la siguiente $valueVolumen";
?>