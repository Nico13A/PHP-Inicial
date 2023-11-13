<?php

include_once("wordix.php");



/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. */
/* Antinao Nicolas Matias */


/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

/**
 * Obtiene una colección de palabras
 * @return array
 */
function cargarColeccionPalabras()
{
    $coleccionPalabras = [
        "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
        "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
        "VERDE", "MELON", "YUYOS", "PIANO", "PISOS",
        "FLASH", "ROMAN", "PERRO", "PULPO", "ZORRO"
    ];

    return ($coleccionPalabras);
}

/* ****COMPLETAR***** */

/**
 * Carga la una lista de partidas jugadas.
 * @return array
 */
function cargarPartidas() {
    // Array $coleccionPartidas
    $coleccionPartidas = [
        ["palabraWordix"=>"RASGO","jugador"=>"pedro","intentos"=>6,"puntaje"=>0],
        ["palabraWordix"=>"CASAS","jugador"=>"juan","intentos"=>4,"puntaje"=>13],
        ["palabraWordix"=>"GATOS","jugador"=>"miguel","intentos"=>2,"puntaje"=>15],
        ["palabraWordix"=>"FUEGO","jugador"=>"nicolas","intentos"=>6,"puntaje"=>0],
        ["palabraWordix"=>"RASGO","jugador"=>"nicolas","intentos"=>5,"puntaje"=>12],
        ["palabraWordix"=>"ZORRO","jugador"=>"juan","intentos"=>1,"puntaje"=>17],
        ["palabraWordix"=>"MUJER","jugador"=>"marta","intentos"=>1,"puntaje"=>16],
        ["palabraWordix"=>"YUYOS","jugador"=>"fernanda","intentos"=>6,"puntaje"=>0],
        ["palabraWordix"=>"PERRO","jugador"=>"ramon","intentos"=>5,"puntaje"=>13],
        ["palabraWordix"=>"FLASH","jugador"=>"juan","intentos"=>3,"puntaje"=>21]
    ];
    return $coleccionPartidas;
}

/**
 * Muestra en pantalla el menú de opciones del juego wordix y le pide al usuario
 * que ingrese una opción y retorna el número de la misma.
 * @return int
 */
function seleccionarOpcion() {
    // Int $opcion
    echo "------------------------------------------------------------------- \n";
    echo "------------------------ Menú de opciones ------------------------- \n";
    echo "1) Jugar al Wordix con una palabra elegida. \n";
    echo "2) Jugar al Wordix con una palabra aleatoria. \n";
    echo "3) Mostrar una partida. \n";
    echo "4) Mostrar la primer partida ganadora. \n";
    echo "5) Mostrar resumen de Jugador. \n";
    echo "6) Mostrar listado de partidas ordenadas por jugador y por palabra. \n";
    echo "7) Agregar una palabra de 5 letras a Wordix. \n";
    echo "8) Salir.\n";
    echo "------------------------------------------------------------------- \n";
    echo "Ingrese una opción: ";
    $opcion = solicitarNumeroEntre(1, 8);
    return $opcion;
}

/**
 * Se le solicita al usuario un número de partida y la colección de partidas, luego 
 * se muestra en pantalla el resumen de la partida.
 * @param int $numeroPartida
 * @param array $coleccionPartidas
 */
function mostrarPartida($numeroPartida, $coleccionPartidas) {
    // String $palabra, $jugador
    // Int $i, $partidaWordix, $puntaje, $intentos
    for ($i=0; $i < count($coleccionPartidas); $i++) { 
        if ($numeroPartida === $i) {
            $partidaWordix = $i;
            $palabra = $coleccionPartidas[$i]["palabraWordix"];
            $jugador = $coleccionPartidas[$i]["jugador"];
            $puntaje = $coleccionPartidas[$i]["puntaje"];
            $intentos = $coleccionPartidas[$i]["intentos"];
        }
    }
    echo "***************************************************************\n";
    echo "Partida WORDIX " . $partidaWordix . ": palabra " . $palabra . "\n";
    echo "Jugador: " . $jugador . "\n";
    echo "Puntaje: " . $puntaje . " puntos\n";
    if ($puntaje === 0) {
        echo "Intento: No adivinó la palabra\n";
    }
    else {
        echo "Intento: Adivino la palabra en " . $intentos . " intento/s\n";
    }
    echo "***************************************************************\n";
}

/**
 * Dada una colección de palabras y una palabra, agrega a la colección la palabra si no 
 * se encuentra en la colección.
 * @param array $coleccionPalabras
 * @param string $palabra
 * @return array
 */
function agregarPalabra($coleccionPalabras, $palabra) {
    // Int $contador String $palabraEncontrada
    $contador = 0;
    $palabraEncontrada = "";
    while ($contador < count($coleccionPalabras) && $palabraEncontrada === "") {
        if ($palabra === $coleccionPalabras[$contador]) {
            $palabraEncontrada = $coleccionPalabras[$contador];
        }
        $contador++;
    }
    if ($palabraEncontrada === "") {
        $coleccionPalabras[] = $palabra;
        echo "Palabra agregada correctamente.\n";
    }
    else {
        echo "La palabra ya se encuentra en la colección.\n";
    }
    return $coleccionPalabras;
}

/**
 * Dado una colección de partidas y un nombre de un jugador retorna el índice de la primer
 * partida que gano, en caso de que no haya ganado ninguna devuelve -1.
 * @param array $coleccionPartidas
 * @param string $jugador
 * @return int 
 */
function indicePrimerPartidaGanada($coleccionPartidas, $jugador) {
    // Int $indicePartidaGanada, $contador Boolean $repetido
    $repetido = false;
    $indicePartidaGanada = -1;
    $contador = 0;
    while (!$repetido && $contador < count($coleccionPartidas)) {
        if ($coleccionPartidas[$contador]["jugador"] === $jugador) {
            if ($coleccionPartidas[$contador]["puntaje"] > 0) {
                $repetido = true;
                $indicePartidaGanada = $contador;
            }
        }
        $contador++;
    }

    return $indicePartidaGanada;
}

/**
 * Dado una coleccion de partidas y el nombre de un jugador, devuelve un arreglo con el 
 * resumen de las partidas del jugador.
 * @param array $coleccionPartidas
 * @param string $jugador
 * @return array
 */
function mostrarResumenJugador($coleccionPartidas, $jugador) {
    //Array $resumenJugador, $partida Int $intentos
    $resumenJugador = [
        'jugador' => $jugador,
        'partidas' => 0,
        'puntaje' => 0,
        'victorias' => 0,
        'intento1' => 0,
        'intento2' => 0,
        'intento3' => 0,
        'intento4' => 0,
        'intento5' => 0,
        'intento6' => 0,
    ];

    foreach ($coleccionPartidas as $partida) {
        if ($partida["jugador"] === $jugador) {
            $resumenJugador["partidas"]++;
            $resumenJugador["puntaje"] += $partida["puntaje"];

            if ($partida["puntaje"]>0) {
                $resumenJugador["victorias"]++;
            }

            $intentos = $partida["intentos"];
            if ($intentos>=1 && $intentos<=6) {
                $resumenJugador["intento" . $intentos]++;
            }
        }
    }

    return $resumenJugador;
}

/**
 * Le solicita al usuario el nombre del jugador y retorna el mismo en minúscula.
 * @return string
 */
function solicitarJugador() {
    // String $primerLetra, $jugador
    $primerLetra = "";
    do {
        echo "Ingrese el nombre del jugador: ";
        $jugador = trim(fgets(STDIN));
        if (ctype_alpha($jugador[0])) {
            $primerLetra = $jugador[0];
        }
        else {
            echo "Error, el nombre debe comenzar con una letra.\n";
        }
    } while ($primerLetra === "");
    return strtolower($jugador);
}

/**
 * Dada una colección de partidas, muestra la misma ordenada por el nombre del jugador
 * y por la palabra.
 * @param array $coleccionPartidas
 */
function mostrarPartidasOrdenadas($coleccionPartidas) {
    // Array $nombres, $palabras
    $nombres = array_column($coleccionPartidas, "jugador");
    $palabras = array_column($coleccionPartidas, "palabraWordix");
    array_multisort($nombres, SORT_ASC, $palabras, SORT_ASC, $coleccionPartidas);
    print_r($coleccionPartidas);
}

/**
 * Dado el nombre del jugador, la palabra con la que quiere jugar y una colección de partidas
 * verifica si la palabra ya fue utilizada en la colección de partidas por este jugador.
 * @param string $nombreJugador
 * @param string $palabra
 * @param array $coleccionPartidas
 * @return boolean
 */
function esPalabraRepetida($nombreJugador, $palabra, $coleccionPartidas) {
    //Int $i Boolean $palabraUsada
    $i = 0;
    $palabraUsada = false;
    while ($i<count($coleccionPartidas) && !$palabraUsada) {
        if ($coleccionPartidas[$i]["jugador"] === $nombreJugador && $coleccionPartidas[$i]["palabraWordix"] === $palabra) {
            $palabraUsada = true;
        }
        $i++;
    }
    return $palabraUsada;
}



/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:
$coleccionPalabras = cargarColeccionPalabras();
$coleccionPartidas = cargarPartidas();

//Proceso:

do {
    $opcion = seleccionarOpcion();
    
    switch ($opcion) {
        case 1: 
            //Completar qué secuencia de pasos ejecutar si el usuario elige la opción 1.
            // Se solicita el nombre del jugador.
            $nombreJugador = solicitarJugador();
            do {
                // Se le pide al usuario el número de la palabra con la que quiere jugar.
                echo "Ingrese un número entre 0 y " . (count($coleccionPalabras)-1) . ": ";
                $numeroPalabra = solicitarNumeroEntre(0, count($coleccionPalabras)-1);
                // Se verifica si la palabra ya fue utilizada.
                if (esPalabraRepetida($nombreJugador, $coleccionPalabras[$numeroPalabra], $coleccionPartidas)) {
                    echo "Debe elegir otro número, la palabra ya fue utilizada.\n";
                }
            } while (esPalabraRepetida($nombreJugador, $coleccionPalabras[$numeroPalabra], $coleccionPartidas));
            
            // Jugar Wordix y guardar los datos de la partida.
            $partida = jugarWordix($coleccionPalabras[$numeroPalabra], $nombreJugador);
            $coleccionPartidas[] = $partida;
            break;
        case 2: 
            //Completar qué secuencia de pasos ejecutar si el usuario elige la opción 2.
            // Se solicita el nombre del jugador.
            $nombreJugador = solicitarJugador();
            do {
                // La funcion array_rand() selecciona uno o mas elementos aleatoriamente de un array.
                $indiceAleatorio = array_rand($coleccionPalabras, 1);
            } while (esPalabraRepetida($nombreJugador, $coleccionPalabras[$indiceAleatorio], $coleccionPartidas));
            
            // Jugar Wordix y guardar los datos de la partida.
            $partida = jugarWordix($coleccionPalabras[$indiceAleatorio], $nombreJugador);
            $coleccionPartidas[] = $partida;
            break;
        case 3: 
            //Completar qué secuencia de pasos ejecutar si el usuario elige la opción 3.
            // Se le solicita al usuario un número de partida.
            echo "Ingrese un número de partida (entre 0 y " . (count($coleccionPartidas)-1) . "): ";
            $numeroPartida = solicitarNumeroEntre(0, count($coleccionPartidas)-1);
            // Se muestra el número de partida ingresado por el usuario.
            mostrarPartida($numeroPartida, $coleccionPartidas);
            break;
        case 4:
            //Completar qué secuencia de pasos ejecutar si el usuario elige la opción 4.
            // Se solicita el nombre del jugador.
            $nombreJugador = solicitarJugador();
            // Se verifica si el jugador ganó alguna partida.
            if (indicePrimerPartidaGanada($coleccionPartidas, $nombreJugador) !== -1) {
                mostrarPartida(indicePrimerPartidaGanada($coleccionPartidas, $nombreJugador), $coleccionPartidas);
            }
            else {
                // Si el índice es -1, significa que el jugador no ganó ninguna partida.
                echo "El jugador " . $nombreJugador . " no ganó ninguna partida.\n";
            }
            break;
        case 5:
            //Completar qué secuencia de pasos ejecutar si el usuario elige la opción 5.
            // Se solicita el nombre del jugador.
            $nombreJugador = solicitarJugador();
            // Se obtiene el array con los datos del resumen del jugador.
            $resumen = mostrarResumenJugador($coleccionPartidas, $nombreJugador);
            // Se muestra en pantalla el resumen.
            echo "*****************************************************************\n";
            echo "Jugador: " . $resumen["jugador"] . "\n";
            echo "Partidas: " . $resumen["partidas"] . "\n";
            echo "Puntaje total: " . $resumen["puntaje"] . "\n";
            echo "Victorias: " . $resumen["victorias"] . "\n";
            if ($resumen["partidas"]>0) {
                echo "Porcentaje victorias: " . (($resumen["victorias"] * 100) / $resumen["partidas"]) . "%\n";
            }
            else {
                echo "Porcentaje victorias: 0%\n";
            }
            echo "Adivinadas:\n";
            echo "      Intento 1: " . $resumen["intento1"] . "\n";
            echo "      Intento 2: " . $resumen["intento2"] . "\n";
            echo "      Intento 3: " . $resumen["intento3"] . "\n";
            echo "      Intento 4: " . $resumen["intento4"] . "\n";
            echo "      Intento 5: " . $resumen["intento5"] . "\n";
            echo "      Intento 6: " . $resumen["intento6"] . "\n";
            echo "*****************************************************************\n";
            break;
        case 6:
            // Se muestran las partidas ordenadas por nombre de jugador y palabra.
            mostrarPartidasOrdenadas($coleccionPartidas);
            break;
        case 7:
            // Se agrega una nueva palabra a la colección.
            $coleccionPalabras = agregarPalabra($coleccionPalabras, leerPalabra5Letras());
            break;
        default:
            echo "Gracias por usar nuestra aplicación!!\n";
            break;
    }
} while ($opcion != 8);

?>