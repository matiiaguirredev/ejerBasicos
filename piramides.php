<?php

// Pirámide de Asteriscos:
// Escribe un programa que imprima una pirámide de asteriscos con una altura ingresada por el usuario. Por ejemplo, si 
// el usuario ingresa 5, la salida debería ser:

/**
 * Programa para imprimir una pirámide de asteriscos
 * con una altura ingresada por el usuario.
 */

// Función para imprimir la pirámide
function imprimirPiramide($altura) {
    for ($i = 1; $i <= $altura; $i++) {
        // Imprimir espacios en blanco para centrar los asteriscos
        for ($j = $altura; $j > $i; $j--) {
            echo " ";
        }

        // Imprimir asteriscos
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }

        // Nueva línea después de cada fila
        echo "\n";
    }
}

// Solicitar la altura al usuario
do {
    $entrada = readline('Ingrese la altura de la pirámide (número entero positivo): ');

    // Validar la entrada
    if (filter_var($entrada, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1]]) === false) {
        echo "Error: Ingrese un número entero positivo mayor que 0.\n";
    } else {
        $altura = (int)$entrada;
    }
} while (!isset($altura));

// Imprimir la pirámide
imprimirPiramide($altura);

