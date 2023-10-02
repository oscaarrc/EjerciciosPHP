<?php declare(strict_types=1);
include 'includes/header.php';

// 1. Realizar un programa en el que se declare una variable de cada tipo de dato;
$booleano = true;
$cadena = "String de prueba";
$entero = 15;
$decimal = 7.25;

//- Que se utilicen las comillas simples y dobles;

$cadena2 = 'hola que tal';

//- que se concatenen varias cadenas;
$concatCadena = $cadena . " " . $cadena2;

//- que se concatenen varias cadenas con sus valores correspondientes;

$concatNumeros = $entero + $decimal;

//- que se realice la salida de una de las cadenas mediante echo y mediante print;
echo $concatCadena . "<br>";
print($concatNumeros) . "<br>";
//- que se declare una constante (mediante define y const);
define("CONSTANTE", 4);
const CONSTANTINOPLA = 6;
echo CONSTANTE + CONSTANTINOPLA . "<br>";
//- que se utilice var_dump();
var_dump($booleano);
//- donde se realice una conversión explícita de tipos;
$noEntero = (float) $decimal;
//- donde haga uso de referencias


include 'includes/footer.php';?>