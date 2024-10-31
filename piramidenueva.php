<?php

// Crea un programa que imprima un triángulo de números, 
// donde el número de filas sea indicado por el usuario. 
// Por ejemplo, si el usuario ingresa "5"

$fila = 15;

echo '<div style="text-align: center;">'; // Comenzar un contenedor centrado

for ($i = 1; $i <= $fila; $i++) {

    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "<br/>"; ;
}


echo "<br/>"; 

$fila = 15;

for ($i= $fila; $i >= 1 ; $i--) { 

    for ($j=1; $j < $i; $j++) { 
        echo "*";
    }
    echo "<br/>"; ;
}

echo '</div>'; // Cerrar el contenedor

