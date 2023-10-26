<?php

// EJERCICIO 5
/*
Un múltiplo de un número es otro número que lo contiene un número entero de veces. 
Diseñar un módulo que dado dos números enteros A y B, devuelva (retorrne) true si A es 
múltiplo de B y false caso contrario. 

Por ejemplo: 28 es múltiplo de 7, por lo tanto la respuesta es true. 
*/

/**
 * @param int $num1
 * @param int $num2
 * @return boolean
 */
function esMultiplo($num1, $num2) {
    return $num1 % $num2 === 0;
}

/* PROGRAMA PRINCIPAL
Dado 2 números ingresados por el usuario, verifica si el primer número es múltiplo del segundo.
*/
//Int $numero1, $numero2
echo "Ingrese un número: ";
$numero1 = intval(trim(fgets(STDIN)));
echo "Ingrese otro número: ";
$numero2 = intval(trim(fgets(STDIN)));
if (esMultiplo($numero1, $numero2)) {
    echo $numero1 . " es múltiplo de " . $numero2 . "\n";
}
else {
    echo $numero1 . " no es múltiplo de " . $numero2 . "\n";
}


?>