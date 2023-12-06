<?php

// EJERCICIO
/*
Dado una estructura de arreglos asociativos, donde cada arreglo se corresponde con una 
variedad de vino donde se guarda: variedad, cantidad de botellas, año de producción, 
precio por unidad; 
retornar un arreglo que por variedad retorne la cantidad de botellas y 
el precio promedio.
*/

$vinos = [
    ["variedad" => "Malbec", "cantidad" => 50, "anioProduccion" => 2019, "precioPorUnidad" => 20.5],
    ["variedad" => "Cabernet Sauvignon", "cantidad" => 30, "anioProduccion" => 2020, "precioPorUnidad" => 25.0],
    ["variedad" => "Chardonnay", "cantidad" => 40, "anioProduccion" => 2018, "precioPorUnidad" => 18.75]
];

/**
 * Dado un arreglo de vinos, retorna un arreglo por variedad.
 * @param array $arregloVinos
 * @return array
 */
function calcularEstadisticasPorVariedad($arregloVinos) {
    //Array $estadisticas, $unaEstadistica, $vino
    //String $variedad
    $estadisticas = [];
    foreach ($arregloVinos as $vino) {
        $variedad = $vino["variedad"];
        if (isset($estadisticas[$variedad])) {
            $estadisticas[$variedad]["cantidad"] += $vino["cantidad"];
            $estadisticas[$variedad]["totalPrecio"] += $vino["cantidad"] * $vino["precioPorUnidad"];
        }
        else {
            $estadisticas[$variedad] = [
                "cantidad" => $vino["cantidad"],
                "totalPrecio" => $vino["cantidad"] * $vino["precioPorUnidad"]
            ];
        }
    }

    /*
    Al utilizar &, estás haciendo que $unaEstadistica sea una referencia al valor real 
    en lugar de una copia, y cualquier cambio realizado en $unaEstadistica dentro del bucle 
    se reflejará directamente en el arreglo original.
    */
    foreach ($estadisticas as &$unaEstadistica) {
        $unaEstadistica["precioPromedio"] = $unaEstadistica["totalPrecio"] / $unaEstadistica["cantidad"];
    }

    return $estadisticas;
}

$resultado = calcularEstadisticasPorVariedad($vinos);

print_r($resultado);


?>