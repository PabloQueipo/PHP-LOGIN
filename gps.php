<?php 
// Comiendo de la sesión
session_start();
// Guardar datos de sesión
echo $_POST['longitude'] . $_POST['latitude'];
echo "\n";
$_SESSION["longitude"] = $_POST['longitude'];
$_SESSION["latitude"] = $_POST['latitude'];

echo "Sesión iniciada y establecido nombre de usuario!" . "<br>";
?>
