<?php

//EJERCICIO 4
/*
Elaborar un programa que lea un número de 3 cifras y determine si es o no capicúa. 
Un número es capicúa si es igual al revés del número. 
Si el número no es de tres cifras muestre en pantalla un cartel de error. 
*/

/** Dado un número retorna verdadero si es capicúa, falso en caso contrario.
 * @param int $num
 * @return boolean
 */
function esCapicua($num) {
    //String $textoDeNum, $textoAlReves Int $numeroAlReves $i
    $textoDeNum = (string)$num;
    $textoAlReves = "";
    for ($i=strlen($textoDeNum)-1; $i >= 0; $i--) { 
        $textoAlReves .= $textoDeNum[$i]; 
    }
    $numeroAlReves = intval($textoAlReves);
    return $num === $numeroAlReves;
}

/* PROGRAMA PRINCIPAL
Solicita un número de 3 cifras al usuario y verifica si es capicúa o no.
*/
//Int $numero
echo "Ingrese un número: ";
$numero = intval(trim(fgets(STDIN)));
if ($numero >= 100 && $numero <= 999) {
    echo esCapicua($numero) ? "$numero es capicúa.\n" : "$numero no es capicúa.\n";
}
else {
    echo "Error, el número ingresado debe ser un número de tres dígitos.\n";
}

?>