<?php

// EJERCICIO 3
/*
a) Una función leerDatosCirco, sin parámetro formal, que solicite a un usuario los datos 
de "nombre", "valorEntrada" y "cantPayasos" de un circo y los almacene 
en un arreglo asociativo. La función debe retornar el arreglo Asociativo. 

b) Un programa principal que invoque a la función leerDatosCirco y que con la función 
print_r de php muestre los datos del circo.
*/

/**
 * Le solicita al usuario los datos de nombre, valor de entrada y la cantidad de payasos
 * de un circo y los retorna en un arreglo asociativo.
 * @return array
 */
function leerDatosCirco() {
    //Array $datosCirco
    $datosCirco = [];
    echo "Ingrese el nombre del circo: ";
    $nombreCirco = trim(fgets(STDIN));
    echo "Ingrese el valor de entrada: ";
    $valorEntrada = trim(fgets(STDIN));
    echo "Ingrese la cantidad de payasos que hay en el circo: ";
    $cantidadPayasos = trim(fgets(STDIN));
    $datosCirco = ["nombre" => $nombreCirco, "valorEntrada" => $valorEntrada, "cantPayasos" => $cantidadPayasos];
    return $datosCirco;
}

print_r(leerDatosCirco());


?>