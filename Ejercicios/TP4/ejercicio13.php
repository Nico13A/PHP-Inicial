<?php

/*
MENU DE OPCIONES:
i. Especificar un módulo cuya entrada es un número y el retorno es el número en orden inverso.
ii. Especificar un módulo cuya entrada sea un número entero > 0 y el retorno es 
la suma de sus dígitos.
Por ejemplo, si el número es 3851, el retorno es 17. si el número es 887977, el retorno es 46.
iii. Especificar un módulo cuya entrada sea un número entero 
(considere que el número es mayor a 0) y el retorno sea la cantidad de divisores. 
Por ejemplo el número 12, tiene 5 divisores (1,2,3,4,6)
iv. Especificar un módulo cuya entrada sea un número entero y el retorne true si el número es
primo, false caso contrario.
v. Implementar un programa principal con un menú de opciones que se repita hasta que el
usuario ingrese la opción salir. Por cada opción debe solicitar un número y mostrar el
resultado.
1- Número inverso
2- Suma de dígitos
3- Cantidad de divisores
4- Es primo?
5- Salir
*/

/** Dado un número retorna el mismo en orden inverso.
 * @param int $numero
 * @return int
 */
function invertirNumero($numero) {
    //Int $inverso $i String $inversoTexto, $textoDelNumero
    $inversoTexto = "";
    $textoDelNumero = (string)$numero;
    for ($i=strlen($textoDelNumero)-1; $i >= 0; $i--) { 
        $inversoTexto .= $textoDelNumero[$i];
    }
    $inverso = intval($inversoTexto);
    return $inverso;
}

/** Dado un número entero positivo retorna la suma de sus dígitos.
 * @param int $numero
 * @return int
 */
function sumarDigitos($numero) {
    //Int $sumaDeDigitos, $i, $digito String $numParaRecorrer
    $sumaDeDigitos = 0;
    $digito = 0;
    $numParaRecorrer = (string)$numero;
    for ($i=0; $i < strlen($numParaRecorrer); $i++) { 
        $digito = intval($numParaRecorrer[$i]);
        $sumaDeDigitos += $digito;
    }
    return $sumaDeDigitos;
}

/** Dado un número, retorna la cantidad de divisores que tiene el mismo.
 * @param int $numero
 * @return int
 */
function calcularDivisores($numero) {
    //Int $divisor, $contador
    $divisor = 1; // Comenzamos desde 1.
    $contador = 0; // Inicializamos el contador de divisores en 0.
    while ($divisor <= $numero) {
        if ($numero % $divisor === 0) {
            // Si el número es divisible por $divisor, incrementamos el contador.
            $contador++;
        }
        $divisor++;
    }
    return $contador; // Devolvemos la cantidad de divisores.
}

/** Dado un número entero retorna true si el número es primo, false caso contrario.
 * @param int $numero
 * @return boolean
 */
function esPrimo($numero) {
    //Boolean $numeroPrimo
    $numeroPrimo = false;
    if (calcularDivisores($numero) === 2) {
        $numeroPrimo = true;
    }
    return $numeroPrimo;
}

/* PROGRAMA PRINCIPAL (Menú)
Dado un menú de opciones el usuario puede decidir que desea realizar.
*/

echo "Bienvenido!!\n";
do {
    echo "1- Número inverso\n";
    echo "2- Suma de dígitos\n";
    echo "3- Cantidad de divisores\n";
    echo "4- Es primo?\n";
    echo "5- Salir\n";
    echo "\nIngrese una opción: ";
    $opcion = intval(trim(fgets(STDIN)));
    switch ($opcion) {
        case 1:
            echo "Ingrese un número para obtener el inverso: ";
            $numeroIngresado = intval(trim(fgets(STDIN)));
            if ($numeroIngresado > 0) {
                echo "El inverso es " . invertirNumero($numeroIngresado) . "\n";
            }
            else {
                echo "No ha ingresado un número mayor a 0.\n";
            }
            break;
        case 2:
            echo "Ingrese un número para sumar sus dígitos: ";
            $numeroIngresado = trim(fgets(STDIN));
            echo "La suma de los dígitos es: " . sumarDigitos($numeroIngresado) . "\n";
            break;
        case 3:
            echo "Ingrese un número para calcular la cantidad de divisores que tiene: ";
            $numeroIngresado = intval(trim(fgets(STDIN)));
            echo "La cantidad de divisores es: " . calcularDivisores($numeroIngresado) . "\n";
            break;
        case 4:
            echo "Ingrese un número para determinar si es primo: ";
            $numeroIngresado = intval(trim(fgets(STDIN)));
            if (esPrimo($numeroIngresado)) {
                echo $numeroIngresado . " es primo.\n";
            }
            else {
                echo $numeroIngresado . " no es primo.\n";
            }
            break;
        case 5:
            echo "Gracias por usar nuestra aplicación.\n";
            break;
        default:
            echo "Ingrese un número de acorde al menú (entre 1 y 5).\n";
            break;
    }
} while ($opcion !== 5);

?>