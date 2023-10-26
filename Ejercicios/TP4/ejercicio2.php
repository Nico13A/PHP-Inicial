<?php

// EJERCICIO 2
/*
Escribir un Programa Principal que le solicite a un usuario números hasta que ingrese un Cero. 
El programa debe mostrar en pantalla la suma de todos los números leídos. 
*/

/* PROGRAMA PRINCIPAL
Solicita al usuario números hasta que ingrese cero y luego muestra la suma de todos los 
números leídos.
*/
//INT $numIngresado $suma
$suma = 0;
do {
    echo "Ingrese un número: ";
    $numIngresado = intval(trim(fgets(STDIN)));
    $suma += $numIngresado;
} while ($numIngresado !== 0);
echo "La suma de todos los números ingresados es: " . $suma . ".\n";

?>