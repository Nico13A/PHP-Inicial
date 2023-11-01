<?php

// EJERCICIO 4
/*
Sala de Arte se dedica a la exposición y venta de cuadros.

El dueño clasifica los cuadros de acuerdo a las siguientes categorías: 
Premium (P), Master (M), Estandar (E), ó Básico (B). 
Además se toman las medidas del ancho y largo en metros del cuadro. 
El autor del cuadro establece un precio base del cuadro que está exponiendo en la sala. 

Resolver las siguientes tareas:
i)	Especificar el algoritmo y los módulos indicados en Pseudocódigo y en PHP:
    
    a) Una función “calcularSuperficie” que recibe por parámetro el ancho y largo y 
    retorna el cálculo de la superficie del cuadro.
    b) Una función “calcularPrecio” que recibe por parámetro la clasificación, la superficie, 
    el precio base del cuadro y retorna el precio final. 
    El precio final se obtiene incrementando el precio base con el siguiente incremento:
        * Si es el cuadro es P (premiun) o M (master) el incremento es de 15%
        * Si es E (estándar) el incremento es de 5%
        * Caso contrario el incremento es de 2%
        * Si el cuadro supera los 2 metros2 de superficie se suma un 10% al porcentaje 
        anterior. Si la superficie está entre 1 y 2 metros2 se suma un 8%.
    c) Un programa principal que solicite los datos a un usuario, y utilizando las funciones 
    de los incisos a) y b), muestre la superficie del cuadro y el precio final.
*/

/**
 * Dado el ancho y largo del cuadro calcula su superficie.
 * @param float $ancho
 * @param float $alto
 * @return float
 */
function calcularSuperficie($ancho, $alto) {
    return $ancho * $alto;
}

/**
 * Dado la clasificación, la superficie y el precio base del cuadro, devuelve su precio final.
 * @param string $clasificacion
 * @param float $superficieCuadro
 * @param float $precioBaseDelCuadro
 * @return float
 */
function calcularPrecio($clasificacion, $superficieCuadro, $precioBaseDelCuadro) {
    //Float $precioFinal
    $precioFinal = 0;
    switch ($clasificacion) {
        case 'P':
        case 'M':
            $precioFinal = $precioBaseDelCuadro + ($precioBaseDelCuadro * 0.15);
            break;
        case 'E':
            $precioFinal = $precioBaseDelCuadro + ($precioBaseDelCuadro * 0.05);
            break;
        default:
            $precioFinal = $precioBaseDelCuadro + ($precioBaseDelCuadro * 0.02);
            break;
    }
    $precioFinal += (($superficieCuadro > 2 ? ($precioBaseDelCuadro * 0.10) : ($superficieCuadro >= 1 && $superficieCuadro <= 2 ? ($precioBaseDelCuadro * 0.08) : 0)));
    return $precioFinal;
}

/* PROGRAMA PRINCIPAL
Le solicita al usuario el ancho, la clasificación, alto y precio base de un cuadro y muestra 
la superficie del mismo y el precio final.
*/
//Float $anchoCuadro, $altoCuadro, $precioBaseCuadro, $precioFinalCuadro, $superficieCuadro 
//String $$clasificacionCuadro
echo "Ingrese el ancho del cuadro: ";
$anchoCuadro = floatval(trim(fgets(STDIN)));
echo "Ingrese el alto del cuadro: ";
$altoCuadro = floatval(trim(fgets(STDIN)));
echo "Ingrese la clasificación del cuadro (Premium (P), Master (M), Estandar (E), ó Básico (B)): ";
$clasificacionCuadro = trim(fgets(STDIN));
echo "Ingrese el precio base del cuadro: ";
$precioBaseCuadro = floatval(trim(fgets(STDIN)));
$superficieCuadro = calcularSuperficie($anchoCuadro, $altoCuadro);
$precioFinalCuadro = calcularPrecio($clasificacionCuadro, $superficieCuadro, $precioBaseCuadro);
echo "La superficie del cuadro es: " . $superficieCuadro . "\n";
echo "El precio final del cuadro es: " . $precioFinalCuadro . "\n";

?>