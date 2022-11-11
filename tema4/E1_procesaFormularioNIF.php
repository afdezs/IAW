<?php
//Incluimos las funciones del NIF
include './E1_FuncionesNIF.php';
//Recogemos los datos del formulario
//vardump $_POST;
$nombre = $_POST["nombre"];
$nif = $_POST["nif"];

echo "El NIF de $nombre está ";

if (verificadorNIF($nif)) {
    echo "El NIF está <b>BIEN</b>.";
} else {
    echo "El NIF está <b>MAL</b>.";
}
?>