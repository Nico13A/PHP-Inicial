<?php

// EJERCICIO 4
/*
Diseñe un programa que lea una secuencia de números que representan el sueldo ($) 
del personal de una empresa y calcule el sueldo promedio de los empleados. 
Utilizar un ciclo interactivo. 
*/

/* PROGRAMA PRINCIPAL
Le pregunta al usuario si desea ingresar un sueldo, en base a los sueldos ingresados
calcula el promedio de los empleados.
*/
//INT $numIngresado $i
$acumuladorSueldos = 0;
$sumaSueldos = 0;
$promedioSueldos = 0;
echo "¿Desea ingresar un sueldo? (s/n) ";
$rtaSueldo = trim(fgets(STDIN));
while ($rtaSueldo === 's') {
    echo "Ingrese el sueldo: ";
    $sueldoIngresado = trim(fgets(STDIN));
    $sumaSueldos = $sumaSueldos + $sueldoIngresado;
    $acumuladorSueldos++;
    echo "¿Desea ingresar otro sueldo? (s/n)";
    $rtaSueldo = trim(fgets(STDIN));
}
if ($acumuladorSueldos !== 0) {
    $promedioSueldos = $sumaSueldos / $acumuladorSueldos;
    echo "El promedio de los sueldos ingresados es: " . $promedioSueldos . "\n";
} else {
    echo "No se ingresaron sueldos.\n";
}











?>