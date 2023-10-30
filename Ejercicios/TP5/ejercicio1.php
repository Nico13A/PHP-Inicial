<?php

// EJERCICIOS DE ARREGLOS INDEXADOS

// EJERCICIO 1
/*
a) Una función leerTemperaturas, cuyo parámetro de entrada formal es un valor n, 
que solicite a un usuario las n temperaturas y las almacene en un arreglo indexado. 
La función debe retornar el arreglo indexado. ¿Qué tipo de datos almacena la colección?
*/

/**
 * Dado un número N ingresado por el usuario que indica cuantas temperaturas va a ingresar, 
 * devuelve el arreglo con las temperaturas.
 * @param int $num
 * @return array
 */
function leerTemperaturas($num) {
    //Array $temperaturas Int $i 
    $temperaturas = [];
    for ($i=0; $i < $num; $i++) { 
        echo "Ingrese la temperatura en grados celsius: ";
        $temperaturas[$i] = floatval(trim(fgets(STDIN)));
    }
    return $temperaturas;
}
/*
echo "Ingrese la cantidad de temperaturas que desea ingresar: ";
$cantidadTemperaturas = intval(trim(fgets(STDIN)));
$temperaturas = leerTemperaturas($cantidadTemperaturas);
for ($i=0; $i < count($temperaturas); $i++) { 
    echo "La temperatura " . $i + 1 . " es: " . $temperaturas[$i] . "\n";
}
*/

/*
b) Una función listarTemperaturas, cuyo parámetro formal es una arreglo indexado de temperaturas. 
La función debe mostrar todos las temperaturas en pantalla. 
¿Qué tipo de recorrido debe realizar, exhaustivo o parcial?
*/

/**
 * Dado un arreglo de temperaturas, muestra en pantalla cada temperatura.
 * @param array $temperaturas
 */
function listarTemperaturas($temperaturas) {
    //Int $i
    for ($i=0; $i < count($temperaturas); $i++) { 
        echo "La temperatura " . ($i + 1) . " es: " . $temperaturas[$i] . ".\n";
    }
}

/*
c) Una función promTemperaturas, que dado un arreglo de temperaturas, 
retorne el promedio de temperaturas.
*/

/**
 * Dado un arreglo de temperaturas, retorna el promedio.
 * @param array $temperaturas
 * @return float
 */
function promTemperaturas($temperaturas) {
    //Float $promedio $suma Int $i
    $suma = 0;
    $promedio = 0;
    for ($i=0; $i < count($temperaturas); $i++) { 
        $suma += $temperaturas[$i];
    }
    $promedio = $suma / count($temperaturas);
    return $promedio;
}

/*
d) Una función porcTemperaturasSuperiores, que dado un arreglo temperaturas y 
una temperatura determinada, obtenga el porcentaje de temperaturas que superan a 
la temperatura determinada.
*/

/**
 * Dado un arreglo de temperaturas y una temperatura determinada devuelve el porcentaje de 
 * temperaturas que superan dicha temperatura. 
 * @param array $temperaturas
 * @param float $temperatura
 * @return float 
 */
function porcTemperaturasSuperiores($temperaturas, $temperatura) {
    //Int $contador, $i Float $porcTempSup
    $contador = 0;
    $porcTempSup = 0;
    for ($i=0; $i < count($temperaturas); $i++) { 
        if ($temperaturas[$i] > $temperatura) {
            $contador++;
        }
    }
    $porcTempSup = ($contador * 100) / count($temperaturas);
    return $porcTempSup;
}

/*
e) Una función minTemperatura, que dada la colección de temperaturas retorne 
el índice donde se encuentra la menor temperatura.
*/

/**
 * Dado una colección de temperaturas retorna el indice donce se encuentra la menor temperatura.
 * @param array $temperaturas
 * @return int
 */
function minTemperatura($temperaturas) {
    //Int $menorTemperatura, $indiceMenorTemperatura, $i
    $menorTemperatura = PHP_INT_MAX;
    $indiceMenorTemperatura = 0;
    for ($i=0; $i < count($temperaturas); $i++) { 
        if ($temperaturas[$i] < $menorTemperatura) {
            $menorTemperatura = $temperaturas[$i];
            $indiceMenorTemperatura = $i;
        }
    }
    return $indiceMenorTemperatura;
}

/*
f) Una función maxTemperatura, que dada la colección de temperaturas retorne el índice 
donde se encuentra la mayor temperatura.
*/

/**
 * Dado una colección de temperaturas retorna el indice donce se encuentra la mayor temperatura.
 * @param array $temperaturas
 * @return int
 */
function maxTemperatura($temperaturas) {
    //Int $mayorTemperatura, $indiceMayorTemperatura, $i
    $mayorTemperatura = PHP_INT_MIN;
    $indiceMayorTemperatura = 0;
    for ($i=0; $i < count($temperaturas); $i++) { 
        if ($temperaturas[$i] > $mayorTemperatura) {
            $mayorTemperatura = $temperaturas[$i];
            $indiceMayorTemperatura = $i;
        }
    }
    return $indiceMayorTemperatura;
}

/*
g) Una función extremosTemperatura, que dada la colección de temperaturas 
retorne un arreglo asociativo que en la clave “min” almacena la menor temperatura y 
en la clave “max” almacena la mayor temperatura.
*/

/**
 * Dado una coleccion de temperaturas retorna un arreglo con la mínima temperatura y la 
 * máxima.
 * @param array $temperaturas
 * @return array 
 */
function extremosTemperatura($temperaturas) {
    //Float $minimaTemperatura, $maximaTemperatura Array $extremoDeTemperaturas
    $minimaTemperatura = $temperaturas[minTemperatura($temperaturas)];
    $maximaTemperatura = $temperaturas[maxTemperatura($temperaturas)];

    $extremoDeTemperaturas = ["min" => $minimaTemperatura, "max" => $maximaTemperatura];
    return $extremoDeTemperaturas;
}

/* PROGRAMA PRINCIPAL

*/
echo "********** PROGRAMA MANEJO DE TEMPERATURAS **********\n";
echo "Ingrese la cantidad de temperaturas que desea ingresar: ";
$cantidadTemperaturas = intval(trim(fgets(STDIN)));

$temperaturas = leerTemperaturas($cantidadTemperaturas);

echo "\nListado de temperaturas ingresadas:\n";
listarTemperaturas($temperaturas);

$promedio = promTemperaturas($temperaturas);
echo "\nEl promedio de temperaturas es: " . $promedio . ".\n";

echo "Ingrese una temperatura umbral: ";
$temperaturaUmbral = floatval(trim(fgets(STDIN)));

$porcentaje = porcTemperaturasSuperiores($temperaturas, $temperaturaUmbral);
echo "El porcentaje de temperaturas que superan la temperatura umbral es: " . $porcentaje . "%.\n";

$indiceMin = minTemperatura($temperaturas);
echo "\nLa menor temperatura se encuentra en la posición $indiceMin.\n";

$indiceMax = maxTemperatura($temperaturas);
echo "La mayor temperatura se encuentra en la posición $indiceMax.\n";

$extremos = extremosTemperatura($temperaturas);
echo "\nTemperatura mínima: " . $extremos["min"] . "\n";
echo "Temperatura máxima: " . $extremos["max"] . "\n";

?>