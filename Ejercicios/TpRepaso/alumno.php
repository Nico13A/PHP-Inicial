<?php

// ****************************** EJERCICIO 1 ******************************

$alumnos = [
    ['nroLegajo' => 1, 'codigoMateria' => 'MAT1', 'notaObtenida' => 8],
    ['nroLegajo' => 2, 'codigoMateria' => 'MAT1', 'notaObtenida' => 7],
    ['nroLegajo' => 1, 'codigoMateria' => 'MAT2', 'notaObtenida' => 6],
    ['nroLegajo' => 3, 'codigoMateria' => 'MAT1', 'notaObtenida' => 9]
];

// a) Dada una materia obtener la cantidad de alumnos que rindieron esa materia.
function obtenerCantidadAlumnosPorMateria($alumnos, $materia) {
    $cantidadAlumnos = 0;
    foreach ($alumnos as $alumno) {
        if ($alumno["codigoMateria"] === $materia) {
            $cantidadAlumnos++;
        }
    }
    return $cantidadAlumnos;
}

// b) Por cada materia el porcentaje de alumnos que rindieron.
function obtenerPorcentajeRindieronPorMateria($alumnos, $materia) {
    $totalAlumnos = count($alumnos);
    $alumnosPorMateria = obtenerCantidadAlumnosPorMateria($alumnos, $materia);
    return ($totalAlumnos > 0) ? ($alumnosPorMateria/$totalAlumnos) * 100 : 0;
}

//c) Obtener toda la información del alumno que mayor nota obtuvo por cada materia.
function obtenerAlumnoConMayorNotaPorMateria($alumnos, $materia) {
    $alumnoConMayorNota = null;
    $mayorNota = 0;
    foreach ($alumnos as $alumno) {
        if ($alumno["codigoMateria"] === $materia && $alumno["notaObtenida"]>$mayorNota) {
            $alumnoConMayorNota = $alumno;
            $mayorNota = $alumno["notaObtenida"];
        }
    }
    return $alumnoConMayorNota;
}

// d) Si una materia se aprueba con una nota >=7, retornar la cantidad de alumnos aprobados por materia.
function calcularAlumnosAprobadosPorMateria($alumnos, $materia) {
    $alumnosAprobados = 0;
    foreach ($alumnos as $alumno) {
        if ($alumno["codigoMateria"] === $materia && $alumno["notaObtenida"]>=7) {
            $alumnosAprobados++;
        }
    }
    return $alumnosAprobados;
}

// e) Dada una materia retornar un arreglo con los alumnos que aprobaron esa materia.
function obtenerAlumnosAprobadosPorMateria($alumnos, $materia) {
    $alumnosAprobados = [];
    foreach ($alumnos as $alumno) {
        if ($alumno["codigoMateria"] === $materia && $alumno["notaObtenida"]>=7) {
            $alumnosAprobados[] = $alumno;
        }
    }
    return $alumnosAprobados;
}

// f) Obtener el o los números de legajo de los alumnos que aprobaron más de cuatro materias.
function obtenerLegajosAprobadosMasDeCuatroMaterias($alumnos) {
    $legajosAprobadosMasDeCuatroMaterias = [];
    $materiasAprobadas = [];
    foreach ($alumnos as $alumno) {
        $legajo = $alumno["nroLegajo"];
        $unaMateria = $alumno["codigoMateria"];
        if ($alumno['notaObtenida'] >= 7 && !in_array($unaMateria, $materiasAprobadas[$legajo])) {
            $materiasAprobadas[$legajo][] = $unaMateria;

            if (count($materiasAprobadas[$legajo]) > 4) {
                $legajosAprobadosMasDeCuatroMaterias[] = $legajo;
            }
        }
    }
    return $legajosAprobadosMasDeCuatroMaterias;
}

// g) Dado un número de legajo, obtener un arreglo con las materias aprobadas por ese alumno.
function obtenerMateriasAprobadasPorAlumno($alumnos, $nrolegajo) {
    $materiasAprobadas = [];

    foreach ($alumnos as $alumno) {
        if ($alumno['nroLegajo'] === $nrolegajo && $alumno['notaObtenida'] >= 7) {
            $materiasAprobadas[] = $alumno['codigoMateria'];
        }
    }

    return $materiasAprobadas;
}



?>