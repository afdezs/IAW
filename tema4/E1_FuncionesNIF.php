<?php
//Devuelve la letra del NIF correspondiente a $numero o
//"" si el número no es correcto.
function calculaLetraDelNif($numero){
    $cadenaNIF = "TRWAGMYFPDXBNJZSQVHLCKE";
    $resto = $numero % 23; //Tomamos el resto de dividir entre 23.
    //Devolvemos el caracter correspondiente al resto.
    return $cadenaNIF[$resto];
}
/*
 //Comprobamos la función

$nif = 23523100;
echo "El NIF $nif tiene la letra " . calculaLetraDelNif($nif); 

echo "<hr>";
*/

//Valida un NIF y devuelve verdadero o falso:
function verificadorNIF($nif){
    $numeroNIF = substr($nif, 0, 8);
    //Devolvemos la comparación de letra calculada y la letra real:
    return (calculaLetraDelNif($numeroNIF) == $nif[8]);    
}
/*
//Comprobamos la función
if (verificadorNIF("76066294H")) {
    echo "El NIF está <b>BIEN</b>.";
} else {
    echo "El NIF está <b>MAL</b>.";
}*/
?>

