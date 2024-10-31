<?php

// Calcular Promedio de Calificaciones:
// Escribe un programa que permita al usuario ingresar las calificaciones de un grupo de estudiantes y luego calcule y 
// muestre el promedio de las calificaciones.

$totalNotas = 0;
$estudiantes = 0;

while (true) {
    $nota = readline("Ingrese la calificación: ");


    if ($nota == 0) {
        break;
    }

    $totalNotas += $nota;
    $estudiantes++;
}

$promedio = $totalNotas / $estudiantes;
echo "El promedio de las calificaciones es: " . $promedio . "\n";
