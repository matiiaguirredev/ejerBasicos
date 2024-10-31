<?php


$i = 1;

do {
    $numero = readline("Ingrese el numero $i: ");

    if (!is_numeric($numero)) {
        echo "el varlor '$i' no es un número, por favor ingrese un número válido.\n";
        continue;
    }

    $numeros[] = $numero;
    $i++;
} while ($i <= 10);

echo "El numero maximo ingresado es:" . max($numeros) . '\n';
echo "El numero menor ingresado es:" . min($numeros);
