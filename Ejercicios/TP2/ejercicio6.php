<?php

//EJERCICIO 6
/*
Para una competencia de ciclismo se requiere calcular y mostrar la velocidad en m/seg 
del 1° y 2° puesto. 
El usuario del programa proveerá información de: 
    distancia en metros de la carrera y el tiempo en horas, minutos y segundos 
    de cada uno de los puestos. 

(Modularice convenientemente: la transformación de horas, min y seg a segundos; 
y el cálculo de la velocidad.)
*/

/** Retorna el valor en segundos dado el tiempo en horas, minutos y segundos.
 * @param int $horas
 * @param int $minutos
 * @param int $segundos
 * @return int
 */
function convertirASegundos($horas, $minutos, $segundos) {
    return ($horas * 3600) + ($minutos * 60) + $segundos;
}

/** Función para calcular la velocidad en m/seg.
 * @param int $distancia
 * @param int $tiempoEnSegundos
 * @return float
 */
function calcularVelocidad($distancia, $tiempoEnSegundos) {
    //Float $velocidad
    $velocidad = $distancia / $tiempoEnSegundos;
    return $velocidad;
}

/* PROGRAMA PRINCIPAL
Dado los datos del primer y segundo puesto de los ciclistas se muestra por pantalla la
velocidad en m/seg de ambos.
*/
//Int $distanciaCiclista1, $horasCiclista1, $minutosCiclista1, $segundosCiclista1, $distanciaCiclista2, $horasCiclista2, $minutosCiclista2, $segundosCiclista2
//Float $velocidadCiclista1, $velocidadCiclista2
echo "CICLISTA 1: \n";
echo "Ingrese la distancia recorrida: ";
$distanciaCiclista1 = trim(fgets(STDIN));
echo "Ingrese la cantidad de horas que demoro: ";
$horasCiclista1 = trim(fgets(STDIN));
echo "Ingrese la cantidad de minutos que demoro: ";
$minutosCiclista1 = trim(fgets(STDIN));
echo "Ingrese la cantidad de segundos que demoro: ";
$segundosCiclista1 = trim(fgets(STDIN));
$velocidadCiclista1 = round(calcularVelocidad($distanciaCiclista1, convertirASegundos($horasCiclista1, $minutosCiclista1, $segundosCiclista1)), 1);
echo "La velocidad del primer ciclista es: " . $velocidadCiclista1 . " m/s.\n";

echo "\n**************************************************\n\nCICLISTA 2: \n";
echo "Ingrese la distancia recorrida: ";
$distanciaCiclista2 = trim(fgets(STDIN));
echo "Ingrese la cantidad de horas que demoro: ";
$horasCiclista2 = trim(fgets(STDIN));
echo "Ingrese la cantidad de minutos que demoro: ";
$minutosCiclista2 = trim(fgets(STDIN));
echo "Ingrese la cantidad de segundos que demoro: ";
$segundosCiclista2 = trim(fgets(STDIN));
$velocidadCiclista2 = round(calcularVelocidad($distanciaCiclista2, convertirASegundos($horasCiclista2, $minutosCiclista2, $segundosCiclista2)), 1);
echo "La velocidad del segundo ciclista es: " . $velocidadCiclista2 . " m/s.\n";





?>