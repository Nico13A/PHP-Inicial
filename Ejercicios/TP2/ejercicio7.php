<?php

//EJERCICIO 7
/*
Un laboratorio de fármacos elabora un antialérgico basado en Loratadina y en Betametasona. 
Al realizar la composición se utiliza agua destilada según esta proporción: 10% de la 
cantidad de Loratadina más 15% de la cantidad de Betametasona. 

a. Una función calcAguaDestilada que recibe por parámetros 
la cantidad de Loratadina y la cantidad de Betametasona. 
La función retorna la cantidad de agua. 
(Recuerde que la cantidad de agua destilada es igual a la suma del  10% de la cantidad 
de Loratadina más el 15% de la cantidad de Betametasona).

b. Un programa principal que solicita la cantidad de Betametasona y la cantidad de Loratadina y, 
utilizando la función del inciso a), muestra la cantidad de agua necesaria.

Realizar la traza para los siguientes valores:
i) 130 de Loratadina y  100 de Betametasona
ii) 50 de Loratadina y 80 de Betametasona
*/

/** Retorna la cantidad de agua destilada dado una cantidad de loratadina y betametasona
 * @param int $loratadina
 * @param int $betametasona
 * @return float
 */
function calcAguaDestilada($loratadina, $betametasona) {
    //Float $cantidadAgua
    $cantidadAgua = $loratadina * 0.15 + $betametasona * 0.10;
    return $cantidadAgua;
}

/* PROGRAMA PRINCIPAL Calculo de agua destilada
Se solicita la cantidad de Betametasona y la cantidad de Loratadina y, 
se muestra la cantidad de agua necesaria.
*/
//Int $cantidadLoratadina, $cantidadBetametasona Float $cantAguaDestilada
echo "Ingrese la cantidad de Loratadina: ";
$cantidadLoratadina = trim(fgets(STDIN));
echo "Ingrese la cantidad de Betametasona: ";
$cantidadBetametasona = trim(fgets(STDIN));
$cantAguaDestilada = calcAguaDestilada($cantidadLoratadina, $cantidadBetametasona);
echo "La cantidad de agua destilada es: " . $cantAguaDestilada . "\n";





?>