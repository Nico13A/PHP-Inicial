<?php

/*
Solicitar al usuario una cantidad de numeros enteros que se desean procesar, 
leer la cantidad de números enteros indicada y determinar la suma de los mismos. 
Utilizar ciclo definido y variable acumuladora. 
*/

/* PRINCIPAL
Solicita al usuario números enteros y muestra en pantalla la suma de los mismos.
*/
//INT $sumaNumeros, $cantidadASumar, $i, $numIngresado
$sumaNumeros = 0;
echo "¿Cuántos números desea sumar? (Ingrese su respuesta en número) ";
$cantidadASumar = trim(fgets(STDIN));

for ($i=1; $i<=$cantidadASumar; $i++) { 
    echo "Ingrese el número " . $i . ": ";
    $numIngresado = trim(fgets(STDIN));
    $sumaNumeros += $numIngresado;
}

echo "La suma es: " . $sumaNumeros . ".\n";


?>