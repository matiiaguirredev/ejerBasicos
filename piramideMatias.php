<?php

do {
    $altura = readline('Ingrese la altura: ');

    if (!is_numeric($altura)) {
        echo "Por favor, ingrese un número válido.\n";
    }
} while (!is_numeric($altura));


for ($i = 1; $i <= $altura; $i++) {

    for ($j = 0; $j < $i ; $j++) {

        echo "*";
    }

    echo "\n";
}
