<?php
$first = $_POST['first'];
$second = $_POST['second'];
$third = $_POST['third'];
$final = ($first + $second + $third) / 3;
if ($final <= 30) {
    echo "Perdio la materia";
} else {
    echo "Paso la materia";
}
?>