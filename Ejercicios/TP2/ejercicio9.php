<?php

//EJERCICIO 9
/*
Diseñe un módulo llamado esMultiplo que recibirá dos números como parámetro y 
devolverá true si el primer parámetro es múltiplo del segundo parámetro, 
false en caso contrario.
*/

/** Dado 2 numeros retorna verdadero si el primer numero es multiplo del segundo.
 * @param int $num1
 * @param int $num2
 * @return boolean
 */
function esMultiplo($num1, $num2) {
    return $num1 % $num2 === 0 ? true : false; 
}

/* PROGRAMA PRINCIPAL
Dado 2 números ingresados por el usuario se evalua si el primer numero ingresado es
múltiplo del segundo numero.
*/
//Int $numero1, $numero2
echo "Ingrese un numero: ";
$numero1 = trim(fgets(STDIN));
echo "Ingrese otro numero: ";
$numero2 = trim(fgets(STDIN));

if ($numero2 > 0) {
    if (esMultiplo($numero1, $numero2)) {
        echo "El numero " . $numero1 . " es multiplo de " . $numero2 . "\n";
    }
    else {
        echo "El numero " . $numero1 . " no es multiplo de " . $numero2 . "\n";
    }
}
else {
    echo "Error, no se pudo realizar la operación ya que el segundo numero ingresado debe ser mayor a 0.\n";
}


?>