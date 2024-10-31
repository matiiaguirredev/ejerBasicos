<?php

// Máximo y Mínimo en un Arreglo:
// Escribe un programa que tome un arreglo de 10 números enteros y muestre el valor máximo y mínimo del arreglo.

$arr = [];

while (true) {
    $num = readline("Ingrese numeros: ");

    if (!is_numeric($num)) {
        if ($num == "fin") {
            break;
        }
        echo "Error, ingrese numeros validos";
        continue;
    }

    $arr[] = $num;

}

if (!$arr){
    echo "No se ingreso ningun dato";
    exit;
}

echo max($arr) . "\n";
echo min($arr) . "\n";
