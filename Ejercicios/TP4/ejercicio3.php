<?php

// EJERCICIO 3
/*
Escribir los números enteros positivos MENORES a N, donde N es un número solicitado al usuario.  
*/

/* PROGRAMA PRINCIPAL
Solicita al usuario un número y luego muestra los enteros positivos menores al número ingresado
por el usuario.
*/
//INT $numIngresado $i
echo "Ingrese un número entero positivo: ";
$numIngresado = trim(fgets(STDIN));
if ($numIngresado > 0) {
    echo "Números enteros positivos menores que " . $numIngresado . ":\n";
    for ($i=1; $i < $numIngresado; $i++) { 
        echo $i . " ";
    }
    echo "\n";
} else {
    echo "No ingreso un número entero positivo, por lo tanto no se muestra nada.\n";
}



?>