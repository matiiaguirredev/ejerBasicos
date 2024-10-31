<?php

// Confeccionar un formulario que solicite la carga del nombre de usuario y su clave en dos
// oportunidades. En la página que se procesan los datos del formulario implementar una función que
// imprima un mensaje si las dos claves ingresadas son distintas.

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
        Nombre: <input type="text" name="nombre" id=""><br>
        Contraseña 1: <input type="password" name="pasw1" id=""><br>
        Contraseña 2: <input type="password" name="pasw2" id=""><br>
        <input type="submit" value="Enviar">
    </form>

</body>

</html>

<?php

function claves($pasw1, $pasw2) {
    if ($pasw1 != $pasw2) {
        return "Clave incorrecta.";
    } else {
        return "Acceso permitido";
    }
}

// Procesar el formulario si se ha enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']);
    $pasw1 = htmlspecialchars($_POST['pasw1']);
    $pasw2 = htmlspecialchars($_POST['pasw2']);

    // Llamar a la función y almacenar el resultado
    $mensaje = claves($pasw1, $pasw2);
    echo $mensaje; // Imprimir el mensaje devuelto
}

?>

