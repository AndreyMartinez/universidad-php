<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
<?php 
echo 'Nombre '; echo $_POST['name']; echo'</br>';
echo 'Apellido'; echo $_POST['lastName']; echo '</br>';
echo 'Fecha de nacimiento'; echo $_POST['age']; echo '</br>';
echo 'Docuemnto'; echo (float)$_POST['document']; echo '</br>';
echo 'Genero'; echo $_POST['gender']; echo '</br>';
echo 'Sintomas '; echo $_POST['symptoms']; echo '</br>';
echo 'Comentarios'; echo $_POST['comentarios'];
?>
</body>
</html>
