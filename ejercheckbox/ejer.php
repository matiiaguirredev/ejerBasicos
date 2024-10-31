<?php 
// Confeccionar un formulario que solicite la carga del nombre de una persona y que permita seleccionar
// una serie de deportes que practica (futbol, basket, tennis, voley).
// Mostrar en la pagina que procesa el formulario la cantidad de deportes que practica 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br>

    <input value="futbol" type="checkbox" name="deporte[]" id="futbol"> futbol<br>
    <input value="basket" type="checkbox" name="deporte[]" id="basket"> basket<br>
    <input value="tennis" type="checkbox" name="deporte[]" id="tennis"> tennis<br>
    <input value="voley" type="checkbox" name="deporte[]" id="voley"> voley<br>
    
    <input type="submit" value="Enviar">
</form>


</body>
</html>

<?php 

if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];

    // Verificar si se seleccionaron deportes
    if (isset($_POST['deporte']) && is_array($_POST['deporte'])) {
        $deportes = $_POST['deporte'];
        $cantidadDeportes = count($deportes);

        // Mostrar el resultado
        echo "<h2>$nombre, practicas $cantidadDeportes deporte(s): " . implode(", ", $deportes) . ".</h2>";
    } else {
        echo "<h2>$nombre, no has seleccionado ningún deporte.</h2>";
    }
}
?>