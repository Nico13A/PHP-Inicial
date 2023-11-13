<?php

// EJERCICIO 1
/*
La concesionaria oficial de automóviles FORD de Neuquén mantiene información sobre los
vehículos que realizan services oficiales en la concesionaria, 
para lo cual se necesita un programa que solicite como entrada:
    i) patente del vehículo
    ii) modelo del automóvil (año en el cual fue adquirido)
    iii)tipo de vehículo: “a” = auto, “c”= camioneta, "d"= camión

Para obtener la siguiente salida:
a) El modelo más antiguo para todos los vehículos ingresados.
b) La patente del vehiculo correspondiente al modelo más antiguo.
c) Qué porcentaje representa la cantidad de camiones ingresados respecto del total de vehículos 
ingresados.
d) Obtener para las camionetas el promedio de sus modelos.

Para la resolución utilice un ciclo interactivo que le permite al usuario ingresar uno o 
más vehículos.
*/

// PRINCIPAL
/*
STRING $patente, $patenteDelMMA, $tipo
INT $modelo, $cantidad, $modeloMasAntiguo, $cantidadCamiones, $cantidadCamionetas,
$sumModelosCamionetas
*/

$modeloMasAntiguo = 9999;
$cantidad = 0;
$respuesta = "SI";
$cantidadCamiones = 0;
$cantidadCamionetas = 0;
$sumModelosCamionetas = 0;

do {
    echo "Ingrese patente: \n";
    $patente = trim(fgets(STDIN));
    echo "Ingrese modelo: \n";
    $modelo = trim(fgets(STDIN));
    echo "Ingrese tipo (a: automovil; c: camioneta; d: camion): \n";
    $tipo = trim(fgets(STDIN));
    $cantidad++;
    if ($modelo < $modeloMasAntiguo) {
        $modeloMasAntiguo = $modelo;
        $patenteDelMMA = $patente;
    }
    if ($tipo == "d") {
        $cantidadCamiones++;
    }
    if ($tipo == "c") {
        $cantidadCamionetas++;
        $sumModelosCamionetas += $modelo;
    }
    echo "Desea ingresar otro vehículo (SI/NO)?";
    $respuesta = trim(fgets(STDIN));
} while($respuesta == "SI");

echo "El modelo mas antiguo es: " . $modeloMasAntiguo . "\n";
echo "La patente del modelo mas antiguo es: " . $patenteDelMMA. "\n";
echo "El porcentaje de la cantidad de camiones sobre el total es: " . ($cantidadCamiones *
100)/$cantidad . "\n";

if ($cantidadCamionetas != 0) {
    echo "Para camionetas el promedio de sus modelos es: " . (INT)($sumModelosCamionetas/$cantidadCamionetas). "\n";
} else {
    echo "No se ingresaron camionetas\n";
}




?>