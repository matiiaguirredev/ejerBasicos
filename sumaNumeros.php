<?php

function sumarNumeros() {
    $suma = 0;

    do {
        $numero = (int) readline("Ingrese un número (0 para terminar): ");
        $suma += $numero;
    } while ($numero != 0);

    return $suma;
}

// Llamar a la función y mostrar el resultado
$total = sumarNumeros();
echo "La suma total de los números ingresados es: $total\n";
