<?php

/*
Dado un número N calcular la siguiente sumatoria de los N primeros nros impares.
Ejemplo: Para N = 2 la sumatoria resulta ser 4.
Proceso: 1 + 3 = 4. 
*/

/* PRINCIPAL
Dado un número N calcula su la sumatoria de los N primeros nros impares.
*/
//Int $sumatoria, $numeroIngresado, $i, $numeroImpar.
$sumatoria = 0;
$numeroImpar = 1;
echo "Ingrese un número para obtener la sumatoria de los primeros números impares: ";
$numeroIngresado = trim(fgets(STDIN));
for ($i=0; $i<$numeroIngresado; $i++) {
    $sumatoria += $numeroImpar;
    $numeroImpar += 2;
}
echo "La sumatoria de los primeros números impares es: " . $sumatoria . ".\n";

?>