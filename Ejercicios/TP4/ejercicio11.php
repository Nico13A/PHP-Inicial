<?php

/*
Dado un valor X > 0 y una secuencia de números enteros finalizada con -1, 
verificar si X pertenece a la secuencia. Si el número es encontrado, el programa 
debe terminar la lectura e imprimir por pantalla "Número encontrado", 
caso contrario escribir "Número no encontrado". 
*/

/* PROGRAMA PRINCIPAL
Dado un número y una secuencia de números evalua si encuentra el número ingresado
en la secuencia y muestra por pantalla si lo encontro o no.
*/
//Int $numeroIngresado, $numeroSecuencia Boolean $encontrado
echo "Ingrese un número mayor a 0 a encontrar: ";
$numeroIngresado = intval(trim(fgets(STDIN)));
$encontrado = false;
do {
    echo "Ingrese un número para la secuencia (o -1 para salir): ";
    $numeroSecuencia = intval(trim(fgets(STDIN)));
    if ($numeroIngresado === $numeroSecuencia) {
        $numeroSecuencia = -1;
        $encontrado = true;
    }
} while ($numeroSecuencia !== -1);

if ($encontrado) {
    echo $numeroIngresado . " fue encontrado!\n";
}
else {
    echo $numeroIngresado . " NO fue encontrado!\n";
}

?>