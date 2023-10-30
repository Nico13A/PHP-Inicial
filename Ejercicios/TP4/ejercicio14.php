<?php

// EJERCICIO 14
/*
En un censo se recorrerá un barrio, vivienda por vivienda, realizando encuestas 
donde se formulan el siguiente conjunto de preguntas por encuesta:
    • Nombre del jefe de hogar.
    • Cantidad de habitantes que viven en la vivienda.
    • Cantidad de niños menores a 18 años

Como resultado se desea visualizar la siguiente información:
    i. Cantidad de encuestadas formuladas
    ii. Cantidad de viviendas que tienen integrantes menores a 18 años
    iii. El nombre del jefe de familia con mayor cantidad de menores en la vivienda.
    iv. Promedio de la cantidad de personas por vivienda.

Especificar un Programa Principal que solicita al usuario cuántas encuestas ingresar al 
programa. Por cada encuesta, pide cada uno de los datos de la encuesta (a. , b. y c.).
Al finalizar el Programa debe mostrar i), ii), iii), iv). 
*/

/* PROGRAMA PRINCIPAL (Censo)
Le solicita al usuario cuántas encuestas desea realizar y en base a esto muestra
cierta información.
*/

echo "¿Cuántas encuestas desea realizar? (Si no desea realizar encuestas ingrese 0)";
$respuesta = intval(trim(fgets(STDIN)));
$cantidadViviendasConMenoresDe18 = 0;
$maximoDeMenores = 0;
$jefeConMasMenores = "";
$totalPersonas = 0;
$promedioPersonasPorVivienda = 0;

if ($respuesta > 0) {
    for ($i=0; $i < $respuesta; $i++) { 
        echo "Ingrese el nombre del jefe de hogar: ";
        $jefeHogar = trim(fgets(STDIN));
        echo "Ingrese la cantidad de habitantes que viven en la vivienda: ";
        $cantidadHabitantes = intval(trim(fgets(STDIN)));
        echo "Ingrese la cantidad de niños menores a 18 años: ";
        $menoresDe18 = intval(trim(fgets(STDIN)));

        $cantidadViviendasConMenoresDe18 += $menoresDe18 > 0 ? 1 : 0;
        
        if ($menoresDe18 > $maximoDeMenores) {
            $maximoDeMenores = $menoresDe18;
            $jefeConMasMenores = $jefeHogar;
        }
        $totalPersonas += $cantidadHabitantes; 
    }

    $promedioPersonasPorVivienda = $totalPersonas / $respuesta;

    echo "Cantidad de encuestas formuladas: ". $respuesta .".\n";
    echo "Cantidad de viviendas que tienen integrantes menores a 18 años: ". $cantidadViviendasConMenoresDe18 .".\n";
    echo "El nombre del jefe de familia con mayor cantidad de menores en la vivienda es :" . $jefeConMasMenores . ".\n";
    echo "Promedio de la cantidad de personas por vivienda: " . $promedioPersonasPorVivienda . ".\n";
}
else {
    echo "Ha ingresado 0 por lo tanto no se han realizado encuestas.\n";
}







?>