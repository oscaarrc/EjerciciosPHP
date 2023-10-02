<?php declare(strict_types=1);
include 'includes/header.php';

// <!-- 3. Realizar el programa “Hola Mundo” que contenga un enlace con el texto “Ir a la
// siguiente página” que abrirá una segunda página que dirá “Esta es la segunda página”
echo '<style>
        .title{
            color:yellow;
            text-align:center;
    </style>';

echo "<h1 class = 'title'>Hola mundo!</h1>";


echo "<a href = 'programa3.1.php'>Ir a la siguiente página</a>";


include 'includes/footer.php';?>