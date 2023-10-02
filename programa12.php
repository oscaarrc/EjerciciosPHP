<?php declare(strict_types=1);
include 'includes/header.php';

// 12. El saltamonte.
// Desarrollar un programa que recibe una cadena de valores enteros separados por coma
// que representa los “saltos". El mismo deberá mostrar el número en la posición actual y
// a continuación saltar tantas posiciones como el número indicado, mostrando en esas
// posiciones _ (underscore) y volviendo a empezar. En el caso de mostrar un 0, se finaliza.
// Por ejemplo, saltos=2,3,4,1,5,3,6,7,8,1,10,0,20 se mostraría:
// 2,_,_,1,_,3,_,_,_,1,_,0,

    $cadena="2,3,4,1,5,3,6,7,8,1,10,0,20";
    $cadenaArray=explode(",", $cadena);
    $cadena2=[];

    for($i=0; $i<count($cadenaArray); $i++){
        if((int)$cadenaArray[$i]==0){
            $cadena2[$i]=0;
            break;
        }
        else {
            $cadena2[$i]=$cadenaArray[$i];
            for ($j=1; $j<=$cadena2[$i];$j++){
                $cadena2[$i+$j]="_";
            }
            $i+=$j-1;
        }
    }
    $nuevaCadena=implode(",", $cadena2);
    echo $nuevaCadena;
?>