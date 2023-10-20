<?php

//EJERCICIO 4
/*
CALCULANDO FÓRMULAS PARA UN TRIÁNGULO.
*/

/*
a) Diseñar módulos  con nombres significativos para cada punto:
i) Recibiendo como parámetro el lado de un triángulo equilátero, retornar su perímetro.
ii) Recibiendo como parámetro el lado de un triángulo equilátero, retornar el valor de la altura.
iii) Recibiendo como parámetro el lado de un triángulo equilátero, retornar su área.
*/

/** Retorna el perimetro de un triangulo equilatero dado un lado.
 * @param float $ladoTriangulo
 * @return float
 */
function perimetroTriangulo($ladoTriangulo) {
    //Float $perimetro
    $perimetro = $ladoTriangulo * 3;
    return $perimetro;
}

/** Retorna la altura de un triangulo equilatero dado un lado.
 * @param float $ladoTriangulo
 * @return float
 */
function alturaTriangulo($ladoTriangulo) {
    //Float $altura
    $altura = (sqrt(3) * $ladoTriangulo) / 2;
    return $altura;
}

/** Retorna el area de un triangulo equilatero dado un lado.
 * @param float $ladoTriangulo
 * @return float
 */
function areaTriangulo($ladoTriangulo) {
    //Float $area
    $area = ($ladoTriangulo * alturaTriangulo($ladoTriangulo)) / 2;
    return $area;
}

/* PROGRAMA PRINCIPAL
Mide el lado de un triángulo equilátero en cm (tipo entero) y muestra por pantalla el 
perimetro y su area.
*/
//Int $ladoIngresado Float $perimetroDelTriangulo, $areaDelTriangulo
$perimetroDelTriangulo = 0;
$areaDelTriangulo = 0;

echo "Ingrese el lado de un triangulo equilatero: ";
$ladoIngresado = trim(fgets(STDIN));
$perimetroDelTriangulo = perimetroTriangulo($ladoIngresado);
$areaDelTriangulo = areaTriangulo($ladoIngresado);
echo "Dado un triangulo equilatero de lado " . $ladoIngresado . " cm, su perimetro es " . $perimetroDelTriangulo . " cm y su area es " . $areaDelTriangulo . " cm2\n"; 



?>