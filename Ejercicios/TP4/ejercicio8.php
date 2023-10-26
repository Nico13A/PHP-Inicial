<?php

/*
Dado un número N calcular la sumatoria de los primeros números naturales.
Ejemplo: Para N = 4 la sumatoria resulta ser: 1 + 2 + 3 + 4 = 10. 
*/

/* PRINCIPAL
Dado un número N calcula su la sumatoria.
*/
//Int $sumatoria, $numeroIngresado, $i
$sumatoria = 0;
echo "Ingrese un número para obtener la sumatoria: ";
$numeroIngresado = trim(fgets(STDIN));
for ($i=1; $i<=$numeroIngresado; $i++) { 
    $sumatoria += $i;
}
echo "La sumatoria es: " . $sumatoria . ".\n";

?>