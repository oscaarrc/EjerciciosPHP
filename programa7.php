<?php declare(strict_types=1);
include 'includes/header.php';

// 7. Crea y muestra un array con los números pares entre 1 y 100.

$array = [];
for ($i=0; $i <= 100; $i++) { 
    if($i%2==0){
        $array[$i] = $i;
        echo $array[$i]==100? "$array[$i].": "$array[$i], ";
    }
}

include 'includes/footer.php';?>