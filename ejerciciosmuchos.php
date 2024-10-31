<?php

// $num = rand(1,100);


// En la variable $num se almacena un valor entero que la computadora genera en forma aleatoria entre
// 1 y 100. Hacer un programa que lo muestre por pantalla al valor generado. Mostrar ademas si es
// menor o igual a 50 o si es mayor. Para imprimir el contenido de una variable tambien utilizamos el
// comando ECHO 

// echo $num . "\n";

// if ($num <= 50) {
//     echo "El número $num es menor o igual a 50.\n";
// } else {
//     echo "El número $num es mayor a 50.\n";
// }

// Generar un valor aleatorio entre 1 y 5. Luego imprimir en castellano el numero (Ej. Si se genera el 3
// lugo mostrar en la pagina el string “tres”). Para ver si una variable es igual a cierto valor debemos
// plantear una condicion similar a: 

// $num = rand(1,10);

// switch ($num) {
//     case 1:
//         echo "Uno\n";
//         break;
//     case 2:
//         echo "Dos\n";
//         break;
//     case 3:
//         echo "Tres\n";
//         break;
//     case 4:
//         echo "Cuatro\n";
//         break;
//     case 5:
//         echo "Cinco\n";
//         break;
//     default:
//         echo "El numero fue: $num, Valor no válido.\n";
// }

// tabla del 2 con for
// for ($i=1; $i <= 10 ; $i++) { 
//     echo $i * 2 . "\n";
// }

// for ($i=1; $i <= 10 ; $i++) { 
//     echo $i * 8 . "\n";
// }

// tabla con while
// $i = 1;
// while ($i <= 10) {
//     echo $i * 6 . "\n";
//     $i++;
// }


//tabla con do while
// do {
//     echo $i * 4 . "\n";
//     $i++;
// } while ($i <= 15);


// factorial simple con for
// $num = readline("Ingrese un número para saber su factorial: ");
// $facto = 1;

// if (!is_numeric($num) || $num < 0) { // Cambiado a || para manejar condiciones de entrada inválida
//     echo "Por favor ingrese un número entero y positivo.\n";
//     exit();
// }

// for ($i = $num; $i > 1; $i--) {
//     echo $facto *= $i;
// }

// echo "El factorial de $num es: $facto\n";



// esto es factorial en funcion
// function factorial($num) { 

//     while (!is_numeric($num) || $num <= 0) {
//         echo "Por favor ingrese un número entero y positivo.\n";
//         $num = readline("Ingrese un número para saber su factorial: ");
//     }

//     $facto = 1;
//     for ($i = $num; $i > 1; $i--) {
//         $facto *= $i;
//     }

//     return $facto;
// }

// $factorialResult = factorial($num); // Llamamos a la función
// echo "El factorial de $num es: $factorialResult\n";


// esta es otra funcion que nos devuelve los factoriales de los num que pedimos, para terminar "fin"
// function factorial($num) {
//     $facto = 1;
//     for ($i = $num; $i > 1; $i--) {
//         $facto *= $i;
//     }
//     return $facto;
// }

// while (true) {
//     $input = readline("Ingrese un número para saber su factorial (o escriba 'fin' para terminar): ");

//     // Verificar si se desea terminar el programa
//     if (strtolower(trim($input)) === 'fin') {
//         echo "Programa finalizado.\n";
//         break;
//     }

//     // Verificar si el valor ingresado es un número positivo
//     if (!is_numeric($input) || $input < 0) {
//         echo "Por favor, ingrese un número entero y positivo.\n";
//         continue;
//     }

//     // Calcular e imprimir el factorial
//     $num = (int)$input;
//     $factorialResult = factorial($num);
//     echo "El factorial de $num es: $factorialResult\n";
// }

// programa de descuento en compras
// $total = 0;
// while (true) {

//     $costo = readline("Ingrese el monto de su compra: ");
//     if (strtolower(trim($costo)) === 'fin') {
//         echo "Ha finalizado su compra. \n";
//         break;
//     }

//     if (!is_numeric($costo) || $costo < 0) {
//         echo "Por favor, ingrese un número entero y positivo.\n";
//         continue;
//     }

//     $total += $costo;
//     $descuento = $total * 25 / 100;
//     $resulFinal = $total - $descuento;
// }

// echo "El total de su compra fue: $$total, con un descuento de $$descuento y su compra queda en: $$resulFinal";



$sumaNotas = 0;
$cantiNotas = 0;

while (true) {
    $nota = readline("Ingrese una nota (o escriba 'fin' para finalizar): ");
    
    if (strtolower(trim($nota)) == "fin") {
        echo "Ha finalizado la suma de sus notas.\n";
        break;
    }

    if (!is_numeric($nota) || $nota <= 0) {
        echo "Por favor, ingrese un número entero y positivo.\n";
        continue;
    }

    $sumaNotas += $nota;
    $cantiNotas++; 
}

if ($cantiNotas > 0) {
    $promedio = $sumaNotas / $cantiNotas;
    echo "La suma de sus notas es: $sumaNotas, ha ingresado $cantiNotas notas, y el promedio es: $promedio\n";
} else {
    echo "No se ingresaron notas válidas.\n";
}
