<?php declare(strict_types=1);
include 'includes/header.php';

// 11. Dado un array de números, un número es “líder” si su valor es mayor que la suma de
// todos los números que se encuentran a su derecha. Escribir un programa que dado un
// array de números, devuelva otro array conteniendo los números líderes.
// Ejemplos:
// • leaders ([1, 2, 3, 4, 0]) ==> return [4]
// • leaders ([16, 17, 4, 3, 5, 2]) ==> return {17, 5, 2]
// • leaders ([5, 2, -1]) ==> return [5, 2]
// • leaders ([0, -1, -29, 3, 2]) ==> return [0, -1, 3, 2]

function leader($array){
    $suma = 0;
    $leaders=[];
    for ($i=0; $i < count($array); $i++) { 
        for ($j=$i+1; $j < count($array)-1; $j++) { 
            $suma+=$array[$j];
        }
        if($array[$i]>$suma){
            $leaders[$i]=$array[$i];
        }
        $suma=0;
    }
    $cadenaLeaders=implode(", ", $leaders);
    return $cadenaLeaders;
}

echo("Array 1: [" . leader([1, 2, 3, 4, 0]) . "]<br>"); //==> return [4]
echo("Array 2: [" . leader([16, 17, 4, 3, 5, 2]) . "]<br>"); //==> return {17, 5, 2]
echo("Array 3: [" . leader([5, 2, -1]) . "]<br>"); //==> return [5, 2]
echo("Array 4: [" . leader([0, -1, -29, 3, 2]) . "]<br>"); //==> return [0, -1, 3, 2]

?>