<?php

//EJERCICIO 3
/*
Implemente un programa principal que solicite dos números enteros M y N por teclado, 
y muestre en pantalla el resultado del siguiente cálculo:  MN +  √ | M |.
*/

/* PROGRAMA PRINCIPAL
Se solicita 2 numeros enteros y se muestra por pantalla el calculo:
numero1 elevado al numero2 + la raiz del modulo del numero1.
*/
//Int $num1, $num2, $resultado
$resultado = 0;
echo "Ingrese un numero: ";
$num1 = trim(fgets(STDIN));
echo "Ingrese otro numero: ";
$num2 = trim(fgets(STDIN));
$resultado = pow($num1, $num2) + sqrt(abs($num1));
echo $resultado . "\n";

//OBS. POTENCIA: pow($base, $exponente), RAIZ: sqrt($numero) y MODULO: abs($numero).
?>