<?php

//EJERCICIO 1
/** Imprime por pantalla los caños. 
 */
function canios() {
    echo "+----+                   |                    +----+\n";
}

/** Imprime por pantalla el campo.
 */
function campo() {
    echo "|                        |                         |\n";
}

/** Imprime por pantalla la línea media.
 */
function lineaMedia() {
    echo "|    |                   |                    |    |\n";
}

/** Imprime por pantalla la línea de banda.
 */
function lineaDeBanda() {
    echo "+------------------------+-------------------------+\n";
}

/* PROGRAMA PRINCIPAL
Diseño de una cancha de fútbol.
*/
lineaDeBanda();
campo();
campo();
canios();
lineaMedia();
lineaMedia();
lineaMedia();
lineaMedia();
canios();
campo();
campo();
lineaDeBanda();

?>