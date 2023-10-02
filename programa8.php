<?php declare(strict_types=1);
include 'includes/header.php';

// 8. Crea un array de 5 números aleatorios entre 20 y 30, y muestralo.



    $array = [];
    for ($i=0; $i < 5; $i++) { 
        $array[$i]=rand(20, 30);
    }
    for ($i=0; $i < count($array); $i++) { 
        echo $i==count($array)-1?"$array[$i].": "$array[$i], ";
    }
    

?>