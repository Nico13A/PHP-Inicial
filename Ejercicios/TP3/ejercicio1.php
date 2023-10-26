<?php

//EJERCICIO 1
/*
Especificar un módulo esPar cuya entrada es un número y el retorno es true si el número 
es par, false caso contrario.
*/

/** Dado un número retorna verdadero si es par, falso en caso contrario.
 * @param int $numero
 * @return boolean
 */
function esPar($numero) {
    //Boolean $par
    $par = false;
    if ($numero %2 === 0) {
        $par = true;
    }
    return $par;
}

/* PROGRAMA PRINCIPAL verificaciónPar
Solicita un número y utilizando la función esPar,  informa por ejemplo: "el nro 10 es: par".
*/
//Int $numero
echo "Ingrese un número: ";
$numero = trim(fgets(STDIN));
if (esPar($numero)) {
    echo "El número $numero es par.\n";
} else {
    echo "El número $numero no es par.\n";
}






?>