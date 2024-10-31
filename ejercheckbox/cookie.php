

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
        <input type="text" name="nombre" id="nombre" required>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php
// Comprobar si se ha enviado el formulario
if (isset($_POST['nombre'])) {
    $nombre = htmlspecialchars($_POST['nombre']); // Sanitizar el nombre
    setcookie('cookieNAME', $nombre, time() + 15, "/"); // Crear una cookie que expire en 15 segundos
    header("Refresh: 15"); // Recargar la página después de 15 segundos
}

// Verificar si la cookie ya está establecida
if (isset($_COOKIE['nombre_visitante'])) {
    $nombreVisitante = htmlspecialchars($_COOKIE['nombre_visitante']);
    echo "<h2>Bienvenido de nuevo, $nombreVisitante!</h2>";
} else {
    echo "<h2>¡Bienvenido! Por favor ingresa tu nombre:</h2>";
}
?>