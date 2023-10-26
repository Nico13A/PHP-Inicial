<?php

/** 
 * Construye una piramide de acuerdo a la cantidad de filas.
 * @param INT $niveles
 */
function piramide($n) {
   // INT fila, col
    for ($fila = 1 ; $fila <= $n; $fila++) {
        for ($col = 1 ; $col <= $fila; $col++) {
            echo $col." " ;
        }
        echo "\n";
    }
}

/* Principal
* Solicita al usuario la cant de filas 
* de una pirámide y luego muestra la misma.
* INT $niveles */
echo "Ingrese la cantidad de filas: ";
$niveles = trim(fgets(STDIN));
piramide($niveles);

?>