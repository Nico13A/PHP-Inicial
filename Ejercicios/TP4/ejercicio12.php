<?php

/*
Diseñe un programa que lea una secuencia de palabras (cada palabra en una línea distinta, 
es decir, separada con enter) hasta que se ingrese el "." y arme una oración conteniendo 
todas las palabras separadas por espacio, finalmente el programa debe mostrar la oración. 
*/

$mensaje = "";
do {
    echo "Ingrese palabra (. para finalizar): ";
    $palabraIngresada = trim(fgets(STDIN));
    $mensaje .= " " . $palabraIngresada;
} while ($palabraIngresada !== '.');
echo $mensaje . "\n";

?>