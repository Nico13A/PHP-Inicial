<?php

//EJERCICIO 5
/*
CORONA CIRCULAR
Especifique un módulo calcular superficie circular.
*/

/** Calcula la superficie circular.
 * @param float $radio
 * @return float
 */
function superficieCircular($radio) {
    /*Float $supCircular*/
    $supCircular = pow($radio, 2) * pi();
    return $supCircular;
}

/*
Especifique un módulo calcular superficie de corona circular cuya entrada por parámetro 
son el radio mayor y el radio menor. Modularizar de forma conveniente para reusar funcionalidad.
(Considere que la superficie de la corona circular se obtiene como la resta de 
las superficies de los círculos que comparten su centro).
*/

/** Calcula la superficie de la corona circular
 * @param float $radioMayor
 * @param float $radioMenor
 * @return float
 */
function supCoronaCircular($radioMayor, $radioMenor) {
    //Float $superficieCorona
    $superficieCorona = superficieCircular($radioMayor) - superficieCircular($radioMenor);
    return $superficieCorona;
}

/* 
Escriba un programa principal que solicite los datos para mostrar en pantalla 
el área de una corona circular. 
*/

/* PROGRAMA PRINCIPAL
Dado 2 radios calcula el area de una corona circular.
*/
//Float $radio1, $radio2, $areaCorona
echo "Ingrese un radio: ";
$radio1 = trim(fgets(STDIN));
echo "Ingrese otro radio: ";
$radio2 = trim(fgets(STDIN));
$areaCorona = supCoronaCircular($radio1, $radio2);
echo "Dado 2 radios el area de la corona circular es: " . $areaCorona . "\n";


?>