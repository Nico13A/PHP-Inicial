<?php

// ****************************** EJERCICIO 1 ******************************

/**
 * Dado un número N retornar su factorial.
 * @param int $numero
 * @return int
 */
function calcularFactorial($numero) {
    //Int $factorial, $i
    $factorial = 1;
    for ($i=1; $i<=$numero; $i++) { 
        $factorial *= $i; 
    }
    return $factorial;
}

//Prueba de función:
//echo calcularFactorial(5); 120


// ****************************** EJERCICIO 2 ******************************

/**
 * Dado un número N retorna verdadero si el mismo es par, falso en caso contrario.
 * @param int $numero
 * @return boolean
 */
function esPar($numero) {
    return $numero % 2 === 0;
}

//Prueba de función:
//echo esPar(4); true o 1
//echo esPar(3); false o 0


// ****************************** EJERCICIO 3 ******************************

/**
 * Dado 2 números N y M, retorna verdadero si el número N es divisble por M, falso en caso
 * contrario.
 * @param int $numeroN
 * @param int $numeroM
 * @return boolean
 */
function esDivisible($numeroN, $numeroM) {
    return $numeroN % $numeroM === 0;
}

//Prueba de función:
//echo esDivisible(4, 2); true o 1
//echo esDivisible(4, 3); false o 0


// ****************************** EJERCICIO 4 ******************************

/**
 * Dado un arreglo de números enteros, determina el valor máximo y mínimo, y 
 * las posiciones en que éstos se encuentran en el arreglo.
 * @param array $numeros
 * @return array
 */
function encontrarMaximoMinimo($numeros) {
    //Int $maximo, $minimo, $posicionMaxima, $posicionMinima, $i
    $maximo = $numeros[0];
    $minimo = $numeros[0];
    $posicionMaxima = 0;
    $posicionMinima = 0;

    for ($i=0; $i < count($numeros); $i++) { 
        if ($numeros[$i] > $maximo) {
            $maximo = $numeros[$i];
            $posicionMaxima = $i;
        }
        if ($numeros[$i] < $minimo) {
            $minimo = $numeros[$i];
            $posicionMinima = $i;
        }
    }
    return [
        "valorMaximo" => $maximo,
        "posicionMaxima" => $posicionMaxima,
        "valorMinimo" => $minimo,
        "posicionMinima" => $posicionMinima
    ];
}

//Prueba de función:
$arregloNumeros = [2, 20, 500, 33, 1];
$resultados = encontrarMaximoMinimo($arregloNumeros);

echo "Valor máximo: " . $resultados['valorMaximo'] . " en la posición " . $resultados['posicionMaxima'] . "\n";
echo "Valor mínimo: " . $resultados['valorMinimo'] . " en la posición " . $resultados['posicionMinima'] . "\n";


// ****************************** EJERCICIO 5 ******************************

/**
 * Dado una n cantidad de nombres, le solicita al usuario los n nombres y retorna 
 * un arreglo indexado con los mismos.
 * @param int $cantidadNombres
 * @return array
 */
function leerNombres($cantidadNombres) {
    //String $nombre Array $nombres
    $nombres = [];
    for ($i=0; $i < $cantidadNombres; $i++) { 
        echo "Ingrese un nombre: ";
        $nombre = trim(fgets(STDIN));
        $nombres[] = $nombre;
    }
    return $nombres;
}

//Prueba de función:
//print_r(leerNombres(4));


// ****************************** EJERCICIO 6 ******************************

/**
 * Dado un número que corresponde a un año calendario, retorna un arreglo con todos
 * los años bisiestos menores al año ingresado.
 * @param int $anio
 * @return array
 */
function calcularBisiestos($anio) {
    //Array $aniosBisiestos
    $aniosBisiestos = [];
    for ($i=0; $i < $anio; $i+=4) { 
        if (($i % 100 !== 0) || ($i % 400 === 0)) {
            $aniosBisiestos[] = $i;
        }
    }
    return $aniosBisiestos;
}

//Prueba de función:
//print_r(calcularBisiestos(2000));


// ****************************** EJERCICIO 7 ******************************

/**
 * Dado 2 arreglos A y B, de N y M elementos, retorna un arreglo con los elementos de
 * A + los elementos de B.
 * @param array $arregloA
 * @param array $arregloB
 * @return array
 */
function combinarArreglos($arregloA, $arregloB) {
    //Array $arregloCombinado
    $arregloCombinado = [];
    foreach ($arregloA as $valorA) {
        $arregloCombinado[] = $valorA;
    }
    foreach ($arregloB as $valorB) {
        $arregloCombinado[] = $valorB;
    }
    return $arregloCombinado;
}

function combinarArreglos2($arregloA, $arregloB) {
    //array_merge
    //Combina los elementos de uno o más arrays juntándolos de modo que los valores 
    //de uno se anexan al final del anterior. Retorna el array resultante.
    return array_merge($arregloA, $arregloB);
}

//Prueba de función:
/*
$arregloA = [1, 2, 3];
$arregloB = [4, 5, 6];

$resultado = combinarArreglos2($arregloA, $arregloB);
print_r($resultado);
*/


// ****************************** EJERCICIO 8 ******************************

/**
 * Dado 2 arreglos A y B, de N y M elementos, retorna un arreglo con los elementos de A
 * que no estan en B.
 * @param array $arregloA
 * @param array $arregloB
 * @return array
 */
/*
function obtenerDiferencia($arregloA, $arregloB) {
    return array_diff($arregloA, $arregloB);
}
*/
function obtenerDiferencia($arregloA, $arregloB) {
    //Array $arregloDiferenciado 
    //Boolean $estaEnB 
    //Int $valorA, $valorB

    $arregloDiferenciado = [];
    
    foreach ($arregloA as $valorA) {
        $estaEnB = false;

        foreach ($arregloB as $valorB) {
            if ($valorA === $valorB) {
                $estaEnB = true;
            }
        }

        if (!$estaEnB) {
            $arregloDiferenciado[] = $valorA;
        }
    }

    return $arregloDiferenciado;
}

//Prueba de función:

$arregloA = [1, 2, 3, 4, 5];
$arregloB = [3, 4, 5, 6, 7];

$resultado = obtenerDiferencia($arregloA, $arregloB);
print_r($resultado);



?>