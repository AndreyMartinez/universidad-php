<?php
$altura = $_POST['personaaltura'];
if($altura <= 150 ) {
    echo "Persona de altura baja";
} else if ($altura <= 170) {
echo "Persona de altura media";
} else {
echo "Persona de altura alta";
}
?>