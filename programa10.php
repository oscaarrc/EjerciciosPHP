<?php declare(strict_types=1);
include 'includes/header.php';

// 10. Recibes una string de valores separados por coma. Debes eliminar del string los valores
// duplicados, mostrando el valor inicial y el valor tras eliminar los duplicados. Por
// ejemplo, para la siguiente cadena “1,2,3,2,4,1,5" se mostrará:
// 1,2,3,2,4,1,5
// 1,2,3,4,5

$cadena = "1, 2, 3, 4, 5, 3, 1, 4, 1, 5, 3";
$array = explode(", " , $cadena);

//Elimina los valores duplicados de otro array
$resultado = array_unique($array);

//Une el array indicado por la cadena especificada
$newCadena = implode(", ", $resultado);

echo $newCadena;