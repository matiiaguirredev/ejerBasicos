<?php
$notas = [];
$i = 1;

do {
    $nota = readline("Ingrese la Nota $i o 'calcula' para salir: ");

    if (!is_numeric($nota) || $nota < 0) {
        if ($nota == "calcula") {
            break;
        }
        echo "Por favor, ingrese un número válido.\n";
        continue;
    }

    $notas[] = $nota;
    $i++;
    
} while (true);

if (count($notas) > 0) {
    $sum = array_sum($notas);
    $promedio = $sum / count($notas);
    echo "El promedio de sus notas es: " . $promedio . "\n";
} else {
    echo "No se ingresaron notas válidas.\n";
}
