<?php

// ****************************** EJERCICIO ******************************

/*
Se desea registrar una encuesta para determinar qué lugar es mas turístico: 
San Martin de los Andes o Bariloche. 
Luego se desean obtener los resultados totales en base a un cuestionario. 
Las preguntas que se van a realizar a cada turista son las siguientes:
1. Nombre
2. ¿Cantidad aproximada de dinero que piensa invertir en sus próximas vacaciones?
3. ¿Cuántas veces viajó a San Martin?
4. ¿Cuántas veces viajó a Bariloche?
5. ¿Cuál es medio de transporte por excelencia que utiliza para sus vacaciones: 
Auto o Colectivo?
Encapsular el registro de la encuesta en una función registrarEncuesta(), 
que retorna la info en un arreglo indexado donde en cada posición i se almacena un 
arreglo asociativo con las respuestas de la encuesta. Es decir, a medida que se
van realizando las preguntas al turista, armar un arreglo asociativo con las siguientes claves: 
nombre, dinero, cantsanmartin, cantbariloche, mediotransporte y almacenarlo en la posición 
i del arreglo indexado.
*/

/**
 * Dado un número de encuestas que se quieren realizar, se realizan N encuestas y se devuelve un 
 * arreglo con la información que se recolecto de las encuestas.
 * @param int $numeroDeEncuestas
 * @return array
 */
function registrarEncuesta($numeroDeEncuestas) {
    //Array $encuestas, $encuesta
    //Int $i, $viajesASM, $viajesAB
    //Float $dineroAInvertir
    //String $nombre, $medioDeTransporte
    $encuestas = [];
    for ($i=0; $i < $numeroDeEncuestas; $i++) { 
        echo "Ingrese su nombre: ";
        $nombre = trim(fgets(STDIN));
        echo "Cantidad de dinero que piensa invertir en sus próximas vacaciones: ";
        $dineroAInvertir = floatval(trim(fgets(STDIN)));
        echo "¿Cuántas veces viajó a San Martín? ";
        $viajesASM = intval(trim(fgets(STDIN)));
        echo "¿Cuántas veces viajó a Bariloche? ";
        $viajesAB = intval(trim(fgets(STDIN)));
        echo "¿Cuál es el medio de transporte por excelencia que utiliza para sus vaciones: Auto o colectivo? ";
        $medioDeTransporte = trim(fgets(STDIN));
        $encuesta = ["nombre" => $nombre, "dinero" => $dineroAInvertir, "cantSanMartin" => $viajesASM, "cantBariloche" => $viajesAB, "medioTransporte" => $medioDeTransporte];
        $encuestas[] = $encuesta;
    }
    return $encuestas;
}

//Prueba de función:
$encuestas = registrarEncuesta(3);
print_r($encuestas);

/*
Ademas implementar las siguientes funciones:
1. cantidadPersonasEncuestadas($arreglo): función que recibe el arreglo de encuestas y 
retorna la cantidad de personas encuestadas.
2. porcentajeAmbosDestinos($arreglo): función que recibe el arreglo de encuestas y retorna 
el porcentaje de personas que conocen ambos destinos turísticos.
3. infoPersona($arreglo): función que recibe el arreglo de encuestas y retorna un arreglo 
asociativo con las siguientes claves principales: bariloche, sanmartin. 
En cada una de estas posiciones se almacena otro arregloasociativo con 
las siguientes claves: nombrePersona y transporte. 
En este último arreglo en la clave nombrePersona, se almacenará el nombre de la persona 
que más ha viajado al destino turístico y en la clave transporte, 
se almacenara el transporte por excelencia seleccionado por la persona.
4. darPromedio($arreglo): función que recibe el arreglo de encuestas y retorna el promedio 
de inversión de un turista en sus próximas vacaciones.
*/

/**
 * Dado un arreglo de encuestas, retorna la cantidad de personas encuestadas.
 * @param array $encuestas
 * @return int
 */
function cantidadPersonasEncuestadas($encuestas) {
    return count($encuestas);
}

/**
 * Dado un arreglo de encuestas, retorna el porcentaje de personas que viajaron tanto a 
 * San Martín como a Bariloche.
 * @param array $encuestas
 * @return float
 */
function porcentajeAmbosDestinos($encuestas) {
    //Int $ambosDestinos, $contador
    //Array $encuesta
    $ambosDestinos = 0;
    $contador = 0;
    foreach ($encuestas as $encuesta) {
        if ($encuesta["cantSanMartin"] > 0 && $encuesta["cantBariloche"] > 0) {
            $ambosDestinos++;
        }
        $contador++;
    }
    return (($ambosDestinos * 100) / $contador);
}

/**
 * Dado un arreglo de encuestas, retorna un arreglo asociativo con las claves principales
 * bariloche y sanMartin, en estas posiciones se almacena otro arreglo asociativo con el 
 * nombre y el transporte de la persona que más viajo a estos lugares.
 * @param array $encuestas
 * @return array
 */
function infoPersona($encuestas) {
    //Array $viajes, $encuesta
    //Int $masViajesAB, $masViajesASM
    $viajes = [];
    $masViajesASM = 0;
    $masViajesAB = 0;
    foreach ($encuestas as $encuesta) {
        if ($encuesta["cantSanMartin"] > $masViajesASM) {
            $masViajesASM = $encuesta["cantSanMartin"];
            $viajes["sanMartin"] = ["nombrePersona" => $encuesta["nombre"], "transporte" => $encuesta["medioTransporte"]];
        }
        if ($encuesta["cantBariloche"] > $masViajesAB) {
            $masViajesAB = $encuesta["cantBariloche"];
            $viajes["bariloche"] = ["nombrePersona" => $encuesta["nombre"], "transporte" => $encuesta["medioTransporte"]];
        }
    }
    return $viajes;
}

/**
 * Recibe un arreglo de encuestas y retorna el promedio de inversión de los turistas 
 * encuestados.
 * @param array $encuestas
 * @return float
 */
function darPromedio($encuestas) {
    //Int $contador, $suma
    //Array $encuesta
    $contador = 0;
    $suma = 0;
    foreach ($encuestas as $encuesta) {
        $suma += $encuesta["dinero"];
        $contador++;
    }
    return ($contador > 0 ? ($suma / $contador) : 0);
}


?>