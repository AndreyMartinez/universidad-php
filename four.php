<?php
$salario = $_POST['salario'];
$tenPercent = (10 * $salario) / 100;
$newValue = $salario + $tenPercent;
echo "El diez porciento es $tenPercent  y el nuevo salario es de $newValue"
?>