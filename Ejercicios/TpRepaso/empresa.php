<?php

// ****************************** EJERCICIO 1 ******************************

/*
Dada una estructura de arreglos asociativos, donde cada posición almacena un arreglo con la 
cantidad recaudada (en pesos) y costo total (en pesos), 
en el que cada mes del año se corresponde con la posición del arreglo dentro del otro arreglo; 
implementar un algoritmo que calcule cuál fue el mes que arrojó mayor ganancia.
*/

/**
 * Dado un arreglo asociativo, retorna el mes que mayor ganancia tuvo.
 * @param array $datosMensuales
 * @return string 
 */
function mayorGanancia($datosMensuales) {
    //String $mesMayorGanancia, $mes
    //Int $mayorGanancia, $ganancia
    //Array $datos
    $mesMayorGanancia = "";
    $mayorGanancia = 0;
    $ganancia = 0;

    foreach ($datosMensuales as $mes => $datos) {
        $ganancia = $datos['recaudacion'] - $datos['costo'];

        if ($ganancia > $mayorGanancia) {
            $mayorGanancia = $ganancia;
            $mesMayorGanancia = $mes;
        }
    }
    return $mesMayorGanancia;
}

//Prueba de función:
$datosMensuales = [
    'enero' => ['recaudacion' => 4000, 'costo' => 3000],
    'febrero' => ['recaudacion' => 6000, 'costo' => 3500],
    'marzo' => ['recaudacion' => 500, 'costo' => 500] 
];

//echo mayorGanancia($datosMensuales);


// ****************************** EJERCICIO 2 ******************************

/*
Dada una estructura de arreglos asociativos, donde cada arreglo se corresponde a la 
información del empleado de una empresa ( nombre completo, sueldo básico, antigüedad), 
retornar un arreglo con el nombre de cada empleado y su sueldo a cobrar. 
El sueldo se calcula adicionando al sueldo básico el 50 % si la antigüedad
supera los 10 años y el 25 % en caso contrario.
*/

/**
 * Dado una estructura de arreglos asociativos, donde cada arreglo corresponde a la 
 * información del empleado de una empresa, retorna un arreglo con el nombre de cada 
 * empleado y su sueldo a cobrar.
 * @param array $empleados
 * @return array
 */
function calcularSueldo($empleados) {
    //Array $infoEmpleados, $empleado
    //Int $sueldoACobrar, $i, $adicional
    $adicional = 0;
    $sueldoACobrar = 0;
    $infoEmpleados = [];

    for ($i=0; $i < count($empleados); $i++) { 

        if ($empleados[$i]["antiguedad"] > 10) {
            $adicional = $empleados[$i]["sueldoBasico"] * 0.50;
            $sueldoACobrar = $empleados[$i]["sueldoBasico"] + $adicional;
        }
        else {
            $adicional = $empleados[$i]["sueldoBasico"] * 0.25;
            $sueldoACobrar = $empleados[$i]["sueldoBasico"] + $adicional;
        }

        $empleado = ["nombre" => $empleados[$i]["nombreCompleto"], "sueldo" => $sueldoACobrar];
        $infoEmpleados[] = $empleado;
    }
    return $infoEmpleados;
}   

$datosEmpleados = [
    ["nombreCompleto" => "Nicolas Antinao", "sueldoBasico" => 20500, "antiguedad" => 11],
    ["nombreCompleto" => "Pedro Riquelme", "sueldoBasico" => 15500, "antiguedad" => 4],
    ["nombreCompleto" => "Osvaldo Suarez", "sueldoBasico" => 12500, "antiguedad" => 21],
    ["nombreCompleto" => "Marcos Reus", "sueldoBasico" => 18500, "antiguedad" => 7],
    ["nombreCompleto" => "Franco Kennedy", "sueldoBasico" => 25500, "antiguedad" => 6],
];

print_r(calcularSueldo($datosEmpleados));


?>