<?php

//EJERCICIO 3
/*
Los exámenes finales en la universidad se aprueban obteniendo 4 o una nota superior. 
Especifique:

Un módulo que dada una nota retorne true si con la nota se aprueba, false caso contrario.

Un programa principal que solicite la nota muestre por pantalla si el alumno aprobó o desaprobó. 
Considere que si la nota está fuera del rango 0 a 10 deberá mostrar 
un cartel de error que diga “nota inválida”.

*/

/** Dada una nota retorne true si con la nota se aprueba, false caso contrario.
 * @param float $nota
 * @return boolean
 */
function aprobarExamen($nota) {
    return $nota >= 4;
}

/* PROGRAMA PRINCIPAL notaAlumnos
Solicita la nota de un alumno y muestra por pantalla si el alumno aprobó o desaprobó.
*/
//Float $notaIngresada
echo "Ingrese su nota: ";
$notaIngresada = trim(fgets(STDIN));
if ($notaIngresada<0 || $notaIngresada>10) {
    echo "Error, nota inválida.\n";
}
else {
    if (aprobarExamen($notaIngresada)) {
        echo "Aprobaste.\n";
    }
    else {
        echo "Desaprobaste.\n";
    }
}




?>