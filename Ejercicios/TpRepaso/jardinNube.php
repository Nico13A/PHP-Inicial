<?php

// EJERCICIO
/*
Dada una estructura de arreglos asociativos, donde cada arreglo se corresponde a la información 
de los alumnos del jardín 
(nombre completo, datos completos del tutor, fecha de nacimiento, sexo); 
retornar un arreglo con el nombre de cada alumno, su edad y el color de la salita a la que va 
(si su sexo es femenino, va a salita verde y si es masculino a salita roja).
*/

$alumnosJardin = [
    ["nombreCompleto" => "Nicolas Antinao", "datosTutor" => "Horacio Antinao", "fechaNacimiento" => "1998-07-13", "sexo" => "masculino"],
    ["nombreCompleto" => "Victoria Messi", "datosTutor" => "Leonel Messi", "fechaNacimiento" => "1998-04-1", "sexo" => "femenino"],
    ["nombreCompleto" => "Juan Ibrahimovic", "datosTutor" => "Zlatan Ibrahimovic", "fechaNacimiento" => "2000-09-21", "sexo" => "masculino"]
];

/**
 * Dado un arreglo de alumnos, retorna la info de los mismos con su edad y salita
 * correspondiente.
 * @param array $alumnosJardin
 * @return array
 */
function darInfoAlumnos($alumnosJardin) {
    //Array $infoAlumnos, $alumno
    //String $salita, $fechaNacimiento, $fechaActual
    //Int $edad
    $infoAlumnos = [];
    $salita = "";
    foreach ($alumnosJardin as $alumno) {
        $salita = ($alumno["sexo"] === "masculino") ? "roja" : "verde";
        $fechaNacimiento = date($alumno["fechaNacimiento"]);
        $fechaActual = date("Y-m-d");
        $edad = (int) floor((strtotime($fechaActual) - strtotime($fechaNacimiento)) / (60*60*24*365));
        $infoAlumnos[] = ["nombre" => $alumno["nombreCompleto"], "edad" => $edad, "salita" => $salita];
    }
    return $infoAlumnos;
}

print_r(darInfoAlumnos($alumnosJardin));

?>