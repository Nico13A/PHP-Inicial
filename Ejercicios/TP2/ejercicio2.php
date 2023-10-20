<?php

//EJERCICIO 2
/*
a) Un módulo esMultiploDe2 que reciba como parámetro de entrada (parámetro formal) un número, 
devuelva (retorne) true si es múltiplo de 2 y false si no lo es. 
*/

/** Comprueba si el número pasado por parámetro es múltiplo de 2.
 * @param int $num
 * @return boolean 
 */
function esMultiploDe2($num) {
    //Boolean $esMultiplo
    $esMultiplo = true;
    if ($num % 2 === 0) {
        $esMultiplo;
    }
    else {
        $esMultiplo = false;
    }
    return $esMultiplo;
}

//Prueba
//echo "Probando la funcion esMultiploDe2(40): " . esMultiploDe2(40) . "\n";
//echo "Probando la funcion esMultiploDe2(19): " . esMultiploDe2(19) . "\n";

/*
b) Especifique en pseudocódigo y luego traduzca un Programa Principal que solicite 
dos números enteros al usuario, e invocando al módulo esMultiploDe2, 
le escriba por pantalla “Tu número es Múltiplo de 2” o “Tu número NO es múltiplo de 2” 
(Utilice el operador ternario convenientemente).
*/

/* PROGRAMA PRINCIPAL
Solicita 2 números e invoca el módulo esMultiploDe2.
*/
//Int $numero1, $numero2
echo "Ingrese un numero: ";
$numero1 = trim(fgets(STDIN));
echo "Ingrese otro numero: ";
$numero2 = trim(fgets(STDIN));
echo esMultiploDe2($numero1) ? "Tu numero es multiplo de 2\n" : "Tu numero no es multiplo de 2\n";
echo esMultiploDe2($numero2) ? "Tu numero es multiplo de 2\n" : "Tu numero no es multiplo de 2\n";


?>