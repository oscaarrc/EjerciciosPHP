<?php declare(strict_types=1);
include 'includes/header.php';

// 6. Realizar un programa que cada vez que se ejecute muestre tu nombre a un tamaño
// elegido al azar entre 200% y 700%

$random = rand(200, 700);

echo "<style>
    .nombre{
        font-size:$random%;
    }
</style>";
echo "<p class = 'nombre'>Óscar Ramos Castellano</p>";


include 'includes/footer.php';?>