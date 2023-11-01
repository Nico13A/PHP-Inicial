<?php

// EJERCICIO 1
/*
a) Desarrolle un módulo que a partir de la altura y la base calcule el área de un triángulo.
b) Desarrolle un módulo que a partir del radio calcule el área de un círculo.
c) Un PROGRAMA PRINCIPAL que interactúe con el usuario de la siguiente manera:
    i) El programa solicita al usuario que indique si desea calcular (1) el área de un 
    triangulo o (2) el área de un círculo.
    ii) Si el usuario elige la opción 1, el programa solicita la altura y la base y muestra 
    la superficie del triangulo.
    iii) Si el usuario elige la opción 2, el programa solicita el radio y muestra la superficie 
    del círculo.
    iv)	Si el usuario elige una opción errónea, el programa le indica que la opción elegida 
    es inválida.
*/

/**
 * Dado la altura y la base de un triángulo, calcula su área.
 * @param int $alturaTriangulo
 * @param int $baseTriangulo
 * @return float 
 */
function calcularAreaTriangulo($alturaTriangulo, $baseTriangulo) {
    //Float $area
    $area = ($baseTriangulo * $alturaTriangulo) / 2;
    return $area;
}

/**
 * Dado el radio de un círculo, calcula su área.
 * @param float $radio
 * @return float
 */
function calcularAreaCirculo($radio) {
    return pow($radio, 2) * pi();
}

/* PROGRAMA PRINCIPAL
Le solicita al usuario que indique si desea calcular (1) el área de un triangulo o (2) el 
área de un círculo. Y en base a esto le pide ciertos datos.
*/
//Int $alturaTriangulo, $baseTriangulo, $opcionElegida Float $radio
echo "Ingrese (1) si desea calcular el área de un triángulo o (2) si desea calcular el área de un círculo: ";
$opcionElegida = intval(trim(fgets(STDIN)));
if ($opcionElegida === 1) {
    echo "Ingrese la altura del triángulo: ";
    $alturaTriangulo = intval(trim(fgets(STDIN)));
    echo "Ingrese la base del triángulo: ";
    $baseTriangulo = intval(trim(fgets(STDIN)));
    echo "El área del triángulo es: " . calcularAreaTriangulo($alturaTriangulo, $baseTriangulo) . ".\n";
}
elseif ($opcionElegida === 2) {
    echo "Ingrese el radio del círculo: ";
    $radio = intval(trim(fgets(STDIN)));
    echo "El área del círculo es: " . calcularAreaCirculo($radio) . ".\n";
}
else {
    echo "La opción elegida es inválida.\n";
}

?>