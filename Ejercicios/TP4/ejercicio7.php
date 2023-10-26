<?php

/*
Dado un número N calcular su factorial. Utilizar ciclo definido y variable acumuladora 
del producto.
Ejemplo: 4! = 1*2*3*4 = 24  
*/

/* PRINCIPAL
Dado un número N calcula su factorial.
*/
//Int $factorial, $numeroIngresado, $i
$factorial = 1;
echo "Ingrese un número para obtener el factorial: ";
$numeroIngresado = trim(fgets(STDIN));
for ($i=1; $i<=$numeroIngresado; $i++) { 
    $factorial *= $i;
}
echo "El factorial es: " . $factorial . ".\n";


?>