<?php

// EJERCICIO 2
//Array $celulares, $valor
$celulares = ["Moto G6", "Samsung J7", "LG K9", "iPhone SE", "Galaxy A9"];
$valor = [22030.90, 10500.00, 27999.00, 38105.00, 17000.80];
/*
Solicitar a un usuario que indique un número de celular a mostrar y muestre el nombre y 
el valor del celular.
*/
echo "Ingrese el número de celular a mostrar: (Entre 0 y 4) ";
$numeroIngresado = intval(trim(fgets(STDIN)));
echo "El celular es " . $celulares[$numeroIngresado] . " y el valor del mismo es " . $valor[$numeroIngresado] . ".\n";
/*
Escriba una función que reciba por parámetro el arreglo de valores y retorno la suma de 
todos los celulares (use la instrucción FOR para recorrerlo).
*/
/**
 * Dado un arreglo de los valores de los celulares devuelve la suma de todos los valores.
 * @param array $valores
 * @return float
 */
function sumarPrecioDeCelulares($valores) {
    //Float $sumaCelulares Int $i
    $sumaCelulares = 0;
    for ($i=0; $i < count($valores); $i++) { 
        $sumaCelulares += $valores[$i];
    }
    return $sumaCelulares;
}
echo "El costo total de todos los celulares es: " . sumarPrecioDeCelulares($valor) . ".\n";


?>