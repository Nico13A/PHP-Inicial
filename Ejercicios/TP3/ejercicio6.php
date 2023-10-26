<?php

// EJERCICIO 6
/*
Una empresa lleva el control de la productividad por mes utilizando un factor (número entero) 
de acuerdo al siguiente listado: 
    enero, febrero y marzo tienen                  factor 15 
    abril, mayo y junio                            factor 17 
    julio y agosto                                 factor 19 
    septiembre, octubre y noviembre                factor 20 
    diciembre                                      factor 21 

Especificar un módulo cuya entrada sea el nombre del mes y retorne el valor del factor.

Especificar un programa que calcule la productividad de un mes dado, 
conociendo que la productividad es igual al número de artículos producidos en el mes, 
multiplicado por el factor que le corresponde al mes proporcionado. 
*/

/** Dado un mes, retorna el valor del factor de dicho mes.
 * @param string $mes
 * @return int
 */
function obtenerFactorPorMes($mes) {
    //Int $factor
    $factor = 0;
    switch ($mes) {
        case 'enero':
        case 'febrero':
        case 'marzo':     
            $factor = 15;
            break;
        case 'abril':
        case 'mayo':
        case 'junio':
            $factor = 17;
            break;
        case 'julio':
        case 'agosto':
            $factor = 19;
            break;
        case 'septiembre':
        case 'octubre':
        case 'noviembre':
            $factor = 20;
            break;
        default:
            $factor = 21;
            break;
    }
    return $factor;
}

/* PROGRAMA PRINCIPAL
Solicita al usuario el nombre del mes y el número de artículos producidos,
y calcula la productividad.
*/
//String $nombreMes Int $articulosProducidos, $productividad, $factor
echo "Ingrese el nombre del mes: ";
$nombreMes = strtolower(trim(fgets(STDIN)));
echo "Ingrese el número de artículos producidos: ";
$articulosProducidos = trim(fgets(STDIN));

$factor = obtenerFactorPorMes($nombreMes);
$productividad = $articulosProducidos * $factor;

echo "La productividad en $nombreMes es: $productividad.\n";


?>