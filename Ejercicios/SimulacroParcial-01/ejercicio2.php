<?php

// EJERCICIO 2
/*
En un Supermercado de la ciudad de Neuquén se realiza un descuento a sus clientes en el sector 
de cajas y se requiere un programa que establezca el valor final de la compra del cliente.

En particular, el porcentaje de descuento se determina con los siguientes criterios:
•	Si el pago es con tarjeta de crédito el porcentaje de descuento es 5%.
•	Si el pago es con tarjeta de débito el porcentaje de descuento es 10%.
•	Si el pago es en efectivo se sigue los siguientes criterios:
        Si el importe es hasta $500, el descuento es del 8%.
        Si el importe de la compra entre $500 y $1000, el descuento es 10%.
        Si el importe de la compra es superior a $1000, el descuento es 12%.
•	Si el pago fuera otro medio de pago, distinto a los anteriores, el porcentaje de 
    descuento es 0%.

Diseñe:
a)	Una función “descontarPorcentaje” que recibe por parámetro el importe total de la compra, 
el porcentaje a descontar y devuelve el precio que el cliente debe abonar. 
(Por ejemplo, si el monto de la compra es $100 y porcentaje de descuento es 10%, 
el módulo debe retornar $90).
b)	Una función “obtenerMontoFinal” que recibe por parámetro: forma de pago 
("E" = Efectivo, "D" = Tarjeta Débito, "TC" = Tarjeta Crédito), importe total de la compra.
La función retorna el monto final de la compra.
OBS. En el cuerpo de la función se debe determinar el porcentaje de descuento y 
descontar el porcentaje.
c)	Un Programa Principal, que solicita el valor de la compra y la forma de pago. 
Luego invoca a la función obtenerMontoFinal y, finalmente, muestra el resultado 
informando el precio final de la compra.
*/

/**
 * Dado el importe total de la compra y el porcentaje a descontar devuelve el precio que el 
 * cliente debe abonar.
 * @param int $totalCompra
 * @param int $porcentajeADescontar
 * @return float
 */
function descontarPorcentaje($totalCompra, $porcentajeADescontar) {
    //Float $precio
    $precio = $totalCompra - (($porcentajeADescontar * $totalCompra) / 100);
    return $precio;
}

/**
 * Dado la forma de pago y el importe total de la compra, retorna el monto final de la compra.
 * @param string $formaDePago
 * @param int $importeTotal
 * @return float
 */
function obtenerMontoFinal($formaDePago, $importeTotal) {
    //Float $montoFinal
    $montoFinal = 0;
    switch ($formaDePago) {
        case 'E':
            $montoFinal += ($importeTotal <= 500 ? descontarPorcentaje($importeTotal, 8) : 
            ($importeTotal <= 1000 ? descontarPorcentaje($importeTotal, 10) : 
            descontarPorcentaje($importeTotal, 12)));
            break;
        case 'D':
            $montoFinal += descontarPorcentaje($importeTotal, 10);
            break;
        case 'TC':
            $montoFinal += descontarPorcentaje($importeTotal, 5);
            break;
        default:
            $montoFinal += descontarPorcentaje($importeTotal, 0);
            break;
    }
    return $montoFinal;
}

/* PROGRAMA PRINCIPAL
Le solicita al usuario el valor de la compra y la forma de pago. Dado esto se muestra por
pantalla el precio final.
*/
//Float $valorCompra String $formaDePago
echo "Ingrese el valor de la compra: ";
$valorCompra = floatval(trim(fgets(STDIN)));
echo "Ingrese la forma de pago: ('E' = Efectivo, 'D' = Tarjeta Débito, 'TC' = Tarjeta Crédito) ";
$formaDePago = trim(fgets(STDIN));
echo "El precio final de la compra es: $" . obtenerMontoFinal($formaDePago, $valorCompra) . ".\n";


?>