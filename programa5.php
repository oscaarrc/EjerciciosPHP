<?php declare(strict_types=1);
include 'includes/header.php';

// 5. Realizar un programa en PHP que muestre un valor al azar entre 1 y 6 con las caras de
// un dado. Para ello puedes utilizar la función rand(valor_inicio, valor_final) y realizar la
// captura de seis imágenes de un dado para hacerlo más visual.

$random = rand(1, 6);

switch($random){
    case 1:
        echo "<h1><img src='./IMG/cara-uno.png'></img></h1>";
        break;
    case 2:
        echo "<h1><img src='./IMG/cara-dos.png'></img></h1>";
        break;
    case 3:
        echo "<h1><img src='./IMG/cara-tres.png'></img></h1>";
        break;
    case 4:
        echo "<h1><img src='./IMG/cara-cuatro.png'></img></h1>";
        break;
    case 5:
        echo "<h1><img src='./IMG/cara-cinco.png'></img></h1>";
        break;
    case 6:
        echo "<h1><img src='./IMG/cara-seis.png'></img></h1>";
        break;    
}



include 'includes/footer.php';?>