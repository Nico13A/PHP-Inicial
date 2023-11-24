<?php

// ****************************** EJERCICIO 1 ******************************

/**
 * Dada una cadena de caracteres terminada en punto, retorna la cantidad de letras que 
 * contiene la cadena.
 * @param string $cadena
 * @return int
 */
function contarCaracteres($cadena) {
    //Int $contador, $i
    $contador = 0;
    for ($i=0; $i < strlen($cadena); $i++) { 
        if ($cadena[$i] !== " " && $cadena[$i] !== ".") {
            $contador++;
        }
    }
    return $contador;
}

//Prueba de función:
//echo contarCaracteres("Hola mundo.");


// ****************************** EJERCICIO 2 ******************************

/**
 * Dado un texto terminado en / y un caracter, retorna cuántas veces aparece ese caracter
 * en el texto. 
 * @param string $cadena
 * @param string $caracter
 * @return int
 */
function contarCiertoCaracter($cadena, $caracter) {
    //Int $conteo
    $conteo = 0;
    if (substr($cadena, -1) === "/") {
        $conteo = substr_count($cadena, $caracter);
    }
    return $conteo;
}

//Prueba de función:
/*
$texto = "Lorem ipsum dolor sit amet/";
$caracter = "o";
$resultado = contarCiertoCaracter($texto, $caracter);
echo $resultado;
*/


// ****************************** EJERCICIO 3 ******************************

/**
 * Dado 2 cadenas, retorna verdadero si la segunda cadena se encuentra en la primera.
 * @param string $cadena1
 * @param string $cadena2
 * @param boolean
 */
function seEncuentra($cadena1, $cadena2) {
    //Boolean $coincidencia
    //Int $posicion, $longitudC1, $longitudC2
    //String $subcadena
    $subcadena = "";
    $coincidencia = false;
    $posicion = 0;
    $longitudC1 = strlen($cadena1);
    $longitudC2 = strlen($cadena2);
    while (($posicion + $longitudC2 <= $longitudC1) && (!$coincidencia)) {
        $subcadena = substr($cadena1, $posicion, $longitudC2);
        if ($subcadena === $cadena2) {
            $coincidencia = true;
        }
        $posicion++;
    }
    return $coincidencia;
}

//Prueba de función:
/*
$unaCadena = "Hola perrito malvado.";//21
$otraCadena = "perrito";//7
echo seEncuentra($unaCadena, $otraCadena);
*/


// ****************************** EJERCICIO 4 ******************************

/**
 * Dada una cadena, retorna su longitud (sin usar count).
 * @param string $cadena
 * @return int
 */
function calcularLongitud($cadena) {
    //Int $suma, $longitud, $i
    $longitud = strlen($cadena);
    $suma = 0;
    for ($i=0; $i < $longitud; $i++) { 
        $suma++;
    }
    return $suma;
}

//Prueba de función:
//echo calcularLongitud("Hola"); 4


// ****************************** EJERCICIO 5 ******************************

/**
 * Dado 2 cadenas (cadena 1 y cadena 2) retorna la cadena de mayor longitud.
 * @param string $cadena1
 * @param string $cadena2
 * @return string
 */
function mayorLongitud($cadena1, $cadena2) {
    $longitudCadena1 = calcularLongitud($cadena1);
    $longitudCadena2 = calcularLongitud($cadena2);
    return ($longitudCadena1 < $longitudCadena2) ? $cadena2 : $cadena1;
}

//Prueba de función:
//echo mayorLongitud("Hola, aguante boca", "Boquita"); Hola, aguante boca

?>