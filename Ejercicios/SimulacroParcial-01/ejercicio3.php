<?php

// EJERCICIO 3
/*
Bhaskara: Especificar un algoritmo para calcular las raíces de un polinomio cuadrático 
considerando la fórmula de Bhaskara y su discriminante. 
Bhaskara se aplica cuando debemos resolver una ecuación del tipo:  a * x2 + b * x + c donde 
a es el término cuadrático, b el lineal y c el independiente.

Hay que tener en cuenta que el discriminante de la ecuación ( b2 − 4ac ) tiene que ser ≥ 0 
para obtener solución dentro de los números Reales.

a) Crear un módulo “calcularDiscriminante” que reciba como parámetro a los 
coeficientes a, b y c y retorne el cálculo del discriminante.
b) Desde un programa principal solicitar al usuario valores de los coeficientes del 
término cuadrático, lineal e independiente: 
o	Si el discriminante es igual 0, mostrar una mensaje en pantalla que diga que las raíces 
    son dobles y el resultado; 
o	Si el discriminante es mayor a 0,  mostrar las dos raíces;
o	Caso contrario, mostrar un mensaje “no es posible calcular raíces Reales”.
*/

/**
 * Dado los coeficientes de una función cuadratica retorna el cálculo del discriminante.
 * @param int $a
 * @param int $b
 * @param int $c
 * @return int
 */
function calcularDiscriminante($a, $b, $c) {
    return pow($b, 2) - (4 * $a * $c);
}

/* PROGRAMA PRINCIPAL Bhaskara
Le solicita al usuario los valores de los coeficientes del término cuadrático. Y dado esto
calcula las raíces y las muestra por pantalla.
*/
//Int $a, $b, $c, $discriminante Float $raiz1, $raiz2 
$raiz1 = 0;
$raiz2 = 0;
echo "Ingrese el coeficiente a: ";
$a = intval(trim(fgets(STDIN)));
echo "Ingrese el coeficiente b: ";
$b = intval(trim(fgets(STDIN)));
echo "Ingrese el coeficiente c: ";
$c = intval(trim(fgets(STDIN)));
$discriminante = calcularDiscriminante($a, $b, $c);

if ($a !== 0) {
    if ($discriminante === 0) {
        $raiz1 = (-$b + sqrt($discriminante)) / (2 * $a);
        echo "Las raíces son dobles.\n";
        echo "El resultado de las raíz es: " . $raiz1 . ".\n";
    }
    elseif ($discriminante > 0) {
        $raiz1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $raiz2 = (-$b - sqrt($discriminante)) / (2 * $a);
        echo "Los resultados de las raíces son: " . $raiz1 . " y " . $raiz2 . ".\n";
    }
    else {
        echo "No es posible calcular raíces reales.\n";
    }
}
else {
    echo "No es una ecuación cuadrática.\n";
}



?>