<?php

/** calcula superficie
 * @param float $ancho
 * @param float $largo
 * @return float
 */
function calcularSuperficie($ancho, $largo) {
    return $ancho * $largo;
}


/** calcula precio cuadro
 * @param string $clasif
 * @param float $superficie
 * @param float $precioBase
 * @return float
 */
function calcularPrecio($clasif, $superficie, $precioBase) {
    // float $precioFinal
    // int $increm

    if ($clasif == "P"  ||  $clasif == "M") {
        $increm = 15;
    } elseif ($clasif == "E") {
        $increm = 5;
    } else {
        $increm = 2;
    }

    if ($superficie > 2) {
        $increm = $increm + 10;
    } elseif ($superficie >=1  &&  $superficie <= 2) {
        $increm = $increm + 8;
    }

    $precioFinal = $precioBase + ($precioBase * $increm/100);

    return $precioFinal;
}





/* PROGRAMA PRINCIPAL
calcula precio de un cuadro ... */
// float ...

echo "Ingrese ancho: ";
$anchoP = trim(fgets(STDIN));
echo "Ingrese largo: ";
$largoP = trim(fgets(STDIN));
echo "Ingrese clasificación (P/M/E/B): ";
$clasifP = trim(fgets(STDIN));
echo "Ingrese precio: ";
$precioP = trim(fgets(STDIN));

$superficieP = calcularSuperficie($anchoP, $largoP);
$precioFinalP = calcularPrecio($clasifP, $superficieP, $precioP);

echo "Superficie: " . $superficieP . "\n";
echo "Precio final: " . $precioFinalP . "\n";