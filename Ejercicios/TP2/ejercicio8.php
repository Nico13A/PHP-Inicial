<?php

//EJERCICIO 8
/*
En el quinto grado de una escuela primaria están aprendiendo figuras geométricas. 
La maestra necesita un programa que calcule distintas medidas de un cilindro. 
El requerimiento es que cada alumno, a partir de la altura y el radio obtenga un detalle 
de la figura.

Por ejemplo: Para una altura de 5cm y una base de radio 3.5 cm 
el alumno debe obtener el siguiente detalle:

"
Cilindro con h=5 y r=3.5:
    longitud de la circunferencia de la base (cm) = 21.98
    superficie base (cm2) = 38.465
    superficie lateral del cilindro (cm2)  = 109.9
    superficie total cilindro (cm2) = 186.83
    volumen del cilindro (cm3) = 192.325
"
*/

/** Retorna la longitud de una circunferencia dado el radio.
 * @param float $radio
 * @return float
 */
function calcularLongitudCirculo($radio) {
    return round(pi(), 2) * 2 * $radio;
}

/** Retorna la superficie de un círculo dado el radio.
 * @param float $radio
 * @return float
 */
function calcularSuperficieCirculo($radio) {
    return round(pi(), 2) * pow($radio, 2);
}

/** Retorna la superfice lateral de un cilindro dado el radio y la altura.
 * @param float $radio
 * @param float $altura
 * @return float
 */
function calcularSupLateralCilindro($radio, $altura) {
    return calcularLongitudCirculo($radio) * $altura;
}

/** Retorna la superficei total de un cilindro dado el radio y altura.
 * @param float $radio
 * @param float $altura
 * @return float
 */
function calcularSupTotalCilindro($radio, $altura) {
    return calcularSupLateralCilindro($radio, $altura) + 2 * calcularSuperficieCirculo($radio);
}

/** Retorna el volumen de un cilindro dado un radio y una altura.
 * @param float $radio
 * @param float $altura
 * @return float
 */
function calcularVolumenCilindro($radio, $altura) {
    return calcularSuperficieCirculo($radio) * $altura;
}

/* PROGRAMA PRINCIPAL Calculo medidas de un cilindro
A partir de la altura y el radio se muestran detalles de la figura del cilindro.
*/
//Float $radio, $altura, 
echo "Ingrese el radio de la base del cilindro (en cm): ";
$radio = trim(fgets(STDIN));
echo "Ingrese la altura del cilindro (en cm): ";
$altura = trim(fgets(STDIN));

$longitudCirfunferencia = calcularLongitudCirculo($radio);
$superficieBase = calcularSuperficieCirculo($radio);
$superficieLateralCilindro = calcularSupLateralCilindro($radio, $altura);
$superficieTotalCilindro = calcularSupTotalCilindro($radio, $altura);
$volumenCilindro = calcularVolumenCilindro($radio, $altura);

echo "Cilindro con h=" . $altura . " y r=" . $radio . ":\n";
echo "  longitud de la circunferencia de la base (cm) = " . $longitudCirfunferencia . "\n";
echo "  superficie base (cm2) = " . $superficieBase . "\n";
echo "  superficie lateral del cilindro (cm2) = " . $superficieLateralCilindro . "\n";
echo "  superficie total cilindro (cm2) = " . $superficieTotalCilindro . "\n";
echo "  volumen del cilindro (cm3) = " . $volumenCilindro . "\n";

?>