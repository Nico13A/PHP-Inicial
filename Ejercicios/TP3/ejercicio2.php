<?php

//EJERCICIO 2
/*
Especificar un módulo que a partir de dos números (num1, num2) retorne true 
si el primero es mayor al segundo (num1>num2),  false caso contrario. 
*/

/** Dado 2 numeros retorna verdadero si el primero es mayor al segundo, falso en caso contrario.
 * @param int $numero1
 * @param int $numero2
 * @return boolean
 */
function esMayor($numero1, $numero2) {
    //Boolean $mayorAlSegundo
    $mayorAlSegundo = false;
    if ($numero1>$numero2) {
        $mayorAlSegundo = true;
    }
    return $mayorAlSegundo;
}

// Ejemplo de uso:
$num1 = 10;
$num2 = 5;

if (esMayor($num1, $num2)) {
    echo "$num1 es mayor que $num2.\n";
} else {
    echo "$num1 no es mayor que $num2.\n";
}


?>