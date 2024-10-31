<?php 

$numero = readline("Ingrese un número entre 1 y 10: ");

while ($numero < 1 ||  $numero > 10) { 
    $numero = readline("El número tiene que ser entre 1 y 10. Ingrese un número correcto: ");
}

echo "¡Número válido! Has ganado.";
