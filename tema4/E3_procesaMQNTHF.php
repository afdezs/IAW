<?php
$precioBase = 200;

//RECEPCIÓN DE DATOS DEL TOMADOR:
$nombre = $_POST["nombre"];
$añoCarnet = $_POST["añoCarnet"];
$sexo = $_POST["sexo"];

$fechaActual = date("Y");


if (($fechaActual - $añoCarnet) < 10) {
     $precioActual = $precioBase * 2;
}
echo $precioActual;
echo "<br>";

echo $fechaActual;

//SI ES MUJER:
if ($sexo == "mujer") {
     $precioActual2 = ($precioActual * 0.10);
}
echo "<br>";
echo $precioActual2;


//RECEPCIÓN DE DATOS DEL VEHÍCULO:

?>

