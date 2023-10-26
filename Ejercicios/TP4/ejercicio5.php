<?php

/*
Ingresar dos (2) números a y b, y retornar la suma de los números impares naturales 
que hay entre ellos. Utilizar la instrucción PARA.
*/

/** Dado 2 números retorna la suma de los números impares que hay entre ellos.
 * @param int $num1
 * @param int $num2
 * @return int
 */
function sumarNumerosImpares($num1, $num2) {
    //Int $sumaNumImpares
    $sumaNumImpares = 0;
    for ($i=$num1+1; $i < $num2; $i++) { 
        if ($i % 2 !== 0) {
            $sumaNumImpares += $i;
        }
    }
    return $sumaNumImpares;
}

/* PRINCIPAL
Solicita al usuario 2 números enteros y muestra en pantalla la suma de los números que 
hay entre ellos si el primer número es menor al segundo número ingresado.
*/
//INT $num1, $num2, $sumaDeImpares

$sumaDeImpares = 0;
echo "Ingrese un número entero positivo: ";
$num1 = trim(fgets(STDIN));
echo "Ingrese otro número entero positivo mayor al primero: ";
$num2 = trim(fgets(STDIN));

if ($num1 < $num2) {
    $sumaDeImpares = sumarNumerosImpares($num1, $num2);
    echo "La suma es: " . $sumaDeImpares . "\n";
}
else {
    echo "El primer número ingresado es menor o igual al segundo número ingresado.\n";
}

?>