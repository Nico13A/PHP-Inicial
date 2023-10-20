<?php

//EJERCICIO 1
/*
Dado el siguiente algoritmo en pseudocódigo:
ALGORITMO mayoriaEdad
    (*Determinar si una persona es mayor de edad*)
    LOGICO esMayor,ENTERO edad,TEXTO nombre, mensaje
    ESCRIBIR ("Ingrese su nombre")
    LEER(nombre)
    ESCRIBIR("Ingrese su edad")
    LEER(edad)
    esMayor <- edad>=18
    mensaje <- SI esMayor ENTONCES nombre + " es mayor de edad" SINO nombre + " 
    es menor de edad"
    ESCRIBIR(mensaje)
FIN ALGORITMO mayoriaEdad

Realice la traducción de Pseudocódigo a PHP.
*/

/* PROGRAMA PRINCIPAL
Determina si una persona es mayor de edad. */
// Boolean $esMayor, Int $edad, String $nombre, $mensaje

$esMayor = false;
$mensaje = "";
echo "Ingrese su nombre: ";
$nombre = trim(fgets(STDIN));
echo "Ingrese su edad: ";
$edad = trim(fgets(STDIN));
$esMayor = $edad >= 18;
$mensaje = $esMayor ? $nombre . " es mayor de edad." : $nombre . " es menor de edad";
echo $mensaje . "\n";


// ====================================================================================

//EJERCICIO 2
/* PROGRAMA PRINCIPAL SegundosAHoras:Minutos:Segundos
Convertir segundos en horas, minutos y segundos. */
//Int $segIngresados, $horas, $minutos, $segundos
echo "Ingrese la cantidad de segundos: ";
$segIngresados = trim(fgets(STDIN));
$horas = (INT)($segIngresados/3600);
$minutos = (INT)(($segIngresados%3600)/60);
$segundos = $segIngresados - ($horas*3600) - ($minutos*60);
echo $horas . " hora: " . $minutos . " minutos: " . $segundos . " segundos\n";

// ====================================================================================

//EJERCICIO 3
/*
Escribir un algoritmo que calcula la velocidad de un vehículo a partir de la distancia
a recorrer en km y el tiempo en horas del recorrido.
*/
//Float $distARecorrer, $velocidad Int $tiempo
$velocidad = 0;
echo "Ingrese la distancia a recorrer en km: ";
$distARecorrer = trim(fgets(STDIN));
echo "Ingrese el tiempo en horas del recorrido: ";
$tiempo = trim(fgets(STDIN));
$velocidad = $distARecorrer/$tiempo;
echo $velocidad . "\n";

// ====================================================================================

//EJERCICIO 4
/*
A usted le pidieron que escriba un programa que encripte sus datos de manera que se transmitan
de forma más segura. 
El programa debe leer un entero de cuatro dígitos y encriptar la información de la siguiente 
manera: 
Reemplace cada dígito con el residuo de la división entre "la suma del dígito más 7" y 10. 
Posteriormente, intercambie el primer dígito con el tercero e intercambie el
segundo dígito con el cuarto.
Luego muestre el entero encriptado.
Ejemplo: nro:1576 , nroencriptado: 4382.
*/ 

/**
 * Este módulo encripta un numero ingresado.
 * @param int $num
 * @return int
 */
function encriptarEntero($num) {
    //Int $digito1, $digito2, $digito3, $digito4, $digitoEncriptado

    //Obtener los dígitos utilizando la operación de módulo.
    //num = 1576
    $digito4 = $num % 10; //6
    $digito3 = ((int)($num/10)) % 10; //7
    $digito2 = ((int)($num/100)) % 10; //5 
    $digito1 = ((int)($num/1000)) % 10; //1

    //Aplicar la encriptación a cada dígito
    $digito1 = ($digito1 + 7) % 10; //8
    $digito2 = ($digito2 + 7) % 10; //2
    $digito3 = ($digito3 + 7) % 10; //4
    $digito4 = ($digito4 + 7) % 10; //3

    //Intercambiar digitos.
    $digitoEncriptado = $digito3 * 1000 + $digito4 * 100 + $digito1 * 10 + $digito2;

    return $digitoEncriptado;
}

/* PROGRAMA Encriptado
Leer un entero de cuatro dígitos y encriptar */
//Int $numeroIngresado, $numeroEncriptado
echo "Ingrese un numero para encriptar: ";
$numeroIngresado = trim(fgets(STDIN));
if ($numeroIngresado >= 1000 && $numeroIngresado <= 9999) {
    $numeroEncriptado = encriptarEntero($numeroIngresado);
    echo "Numero encriptado: " . $numeroEncriptado . "\n";
} else {
    echo "El numero ingresado no tiene 4 digitos\n";
}

// ====================================================================================

//EJERCICIO 5
/*
Escriba otro programa por separado que solicite un entero encriptado de cuatro dígitos y lo
desencripte para formar el número original.
Ejemplo: Nroencriptado: 4382, nrodesencriptado: 1576.
*/ 

/**
 * Este módulo desencripta un numero ingresado.
 * @param int $num
 * @return int
 */
function desencriptarEntero($num) {
    //Int $digito1, $digito2, $digito3, $digito4, $numDesencriptado
    //4382
    $digito4 = $num % 10; //2
    $digito3 = ((int)($num/10)) % 10; //8
    $digito2 = ((int)($num/100)) % 10; //3
    $digito1 = ((int)($num/1000)) % 10; //4

    //Aplicar la desencriptación a cada dígito
    //Este +3 sale de al no querer que quede en negativo el numero le sumo 10 y le resto 7.
    $digito1 = ($digito1 + 3) % 10; //7
    $digito2 = ($digito2 + 3) % 10; //6
    $digito3 = ($digito3 + 3) % 10; //1
    $digito4 = ($digito4 + 3) % 10; //5

    //Intercambiar digitos.
    $numDesencriptado = $digito3 * 1000 + $digito4 * 100 + $digito1 * 10 + $digito2;

    return $numDesencriptado;
}

/* PROGRAMA Desencriptado
Dado un numero entero encriptado, lo desencripta. */
//Int $numIngresado, $numeroDesencriptado
echo "Ingrese un numero para desencriptar: ";
$numIngresado = trim(fgets(STDIN));
if ($numIngresado >= 1000 && $numIngresado <= 9999) {
    $numeroDesencriptado = desencriptarEntero($numIngresado);
    echo "Numero desencriptado: " . $numeroDesencriptado . "\n";
} else {
    echo "El numero ingresado no tiene 4 digitos\n";
}

?>