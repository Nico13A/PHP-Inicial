<?php

/*
Leer un número X y, luego utilizando un ciclo interactivo, lea una secuencia de números. 
Mostrar cuál es el porcentaje de números leídos que fueron múltiplos de X.

Ejemplo: X= 8 y la secuencia 12, 23, 24, 56, 11, 16, 
la salida es: “50% de los 6 números son múltiplos de 8” 
*/

/* PRINCIPAL
Dado un número N y una secuencia de números muestra el porcentaje de números que son 
múltiplos de N.
*/
//Int $contadorMultiplo, $numeroIngresado, $contadorSecuencia, $multiplo String $respuesta Float $porcentajeMultiplo
$contadorMultiplo = 0;
$contadorSecuencia = 0;
echo "Ingrese un número para evaluar sus múltiplos: ";
$multiplo = trim(fgets(STDIN));
echo "¿Desea ingresar un número de la secuencia? (s/n): ";
$respuesta = trim(fgets(STDIN));
while ($respuesta === 's') {
    echo "Ingrese el número de la secuencia: ";
    $numeroIngresado = trim(fgets(STDIN));
    if ($numeroIngresado % $multiplo === 0) {
        $contadorMultiplo ++; 
    }
    $contadorSecuencia++;
    echo "¿Desea ingresar un número de la secuencia? (s/n): ";
    $respuesta = trim(fgets(STDIN));
}

if ($contadorSecuencia !== 0) {
    $porcentajeMultiplo = $contadorMultiplo * 100 / $contadorSecuencia;
    echo "El porcentaje de múltiplos es: " . $porcentajeMultiplo . "%.\n";
}
else {
    echo "No se ingresaron números en la secuencia.\n";
}


?>