<?php

// EJERCICIO 4
/*
Arreglos Multidimensionales: Para una Veterinaria implementar las siguientes funciones en PHP:

a) Una función cargarMascotas sin parámetros formales, que retorne el siguiente arreglo 
Multimensional (esfunción no debe leer datos, sólo debe inicializar el arreglo siguiente y 
retonarlo):
*/

/**
 * Retorna un arreglo multidimensional de mascotas.
 * @return array
 */
function cargarMascotas() {
    //Array $misMascotas
    $misMascotas = [["nombre" => "Gonzo", "edad" => 9, "tipo" => "perro"], 
    ["nombre" => "Peggy", "edad" => 3, "tipo" => "puerco"], 
    ["nombre" => "Harry", "edad" => 4, "tipo" => "hamster"]];
    return $misMascotas;
}

/*
Una función cuyo parámetro sea un arreglo Multidimensional de Mascotas y, 
utilizando estructura repetitiva, muestre los datos en pantalla de todas las mascotas 
(nombre, edad y tipo), con el siguiente formato:
    Mascota 1: Gonzo es perro de 9 años.
    Mascota 2: Peggy es puerco de 3 años.
    Mascota 3: Harry es hamster de 4 años.
    Mascota 4: Rudolf es perro de 2 años.
*/

/**
 * Dado un arreglo de mascotas muestra en pantalla los datos de las mascotas.
 * @param array $mascotas
 */
function mostrarMascotas($mascotas) {
    //Int $i
    for ($i=0; $i < count($mascotas); $i++) { 
        echo "Mascota " . ($i+1) . ": " . $mascotas[$i]["nombre"] . " es " . $mascotas[$i]["tipo"] . " de " . $mascotas[$i]["edad"] . " años.\n"; 
    }
}
/*
$mascotas = [
    ["nombre" => "Gonzo", "edad" => 9, "tipo" => "perro"],
    ["nombre" => "Peggy", "edad" => 3, "tipo" => "puerco"],
    ["nombre" => "Harry", "edad" => 4, "tipo" => "hamster"],
    ["nombre" => "Rudolf", "edad" => 2, "tipo" => "perro"]
];

mostrarMascotas($mascotas);
*/

/*
Una función buscarPrimerMenorA, cuyos dos parámetros de entrada formal sean: 
Un arreglo Multidimensional de mascotas y un entero que represente la edad. 

La función debe retornar -1 si no existe una mascota menor a la edad ingresada. 
Si existe una mascota menor a dicha edad, la función debe retorna la primer mascota que cumpla
con dicha condición. (Implementar un recorrido Parcial).
*/

/**
 * Dado un arreglo y una edad, retorna -1 si no existe una mascota menor a la edad ingresada.
 * Si existe retorna la primer mascota que cumpla con dicha condición.
 * @param array $mascotas
 * @param int $edad
 * @return mixed 
 */
function buscarPrimerMenorA($mascotas, $edad) {
    //Int $mascotaEncontrada, $contador Array $mascotaEncontrada
    $mascotaEncontrada = -1;
    $contador = 0;
    while ($contador < count($mascotas) && $mascotaEncontrada === -1) { 
        if ($mascotas[$contador]["edad"] < $edad) {
            $mascotaEncontrada = $mascotas[$contador];
        }
        $contador++;
    }
    return $mascotaEncontrada;
}

//EJEMPLO DE USO
//Utilizo la función cargarMascotas
$misMascotas = cargarMascotas();
//Luego utilizo la función mostrarMascotas.
mostrarMascotas($misMascotas);
//Luego utilizo la función buscarPrimerMenorA cuya edad ingresada va a ser por el usuario.
echo "Ingrese una edad para comparar: ";
$edadIngresada = intval(trim(fgets(STDIN)));
$resultado = buscarPrimerMenorA($misMascotas, $edadIngresada);
if ($resultado !== -1) {
    echo "La primera mascota menor a $edadIngresada es " . $resultado["nombre"] . ".\n";
}
else {
    echo "No se encontraron mascotas menores a $edadIngresada.\n";
}

?>