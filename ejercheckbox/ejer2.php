<?php
// Confeccionar una página que muestre un contrato dentro de un textarea,
// disponer puntos suspensivos donde el operador debe ingresar un texto.
// La página que procesa el formulario solo debe mostrar el contrato con las modificaciones que hizo el operador.
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrato</title>
</head>

<body>

    <form action="" method="post">
        <label for="ciudad">Ciudad:</label>
        <input type="text" name="ciudad" id="ciudad" required> <br>
        
        <label for="empresa">Empresa:</label>
        <input type="text" name="empresa" id="empresa" required> <br>
        
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required> <br>

        <label for="nombre">Nombre EMPLEADOR:</label>
        <input type="text" name="nombre2" id="nombre" required> <br>
        
        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion" required> <br>

        <label for="direccion">Dirección Laboral:</label>
        <input type="text" name="direccionLab" id="direccion" required> <br>
        
        <br>

        <textarea name="formulario" id="" rows="5" cols="100" readonly >
En la ciudad de <?php echo isset($_POST['ciudad']) ? htmlspecialchars($_POST['ciudad']) : '________'; ?>, se acuerda entre la Empresa <?php echo isset($_POST['empresa']) ? htmlspecialchars($_POST['empresa']) : '________'; ?> representada por el Sr. <?php echo isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : '________'; ?> en su carácter de Apoderado, con domicilio en la calle <?php echo isset($_POST['direccion']) ? htmlspecialchars($_POST['direccion']) : '________'; ?> y el Sr.<?php echo isset($_POST['nombre2']) ? htmlspecialchars($_POST['nombre2']) : '________'; ?>, futuro empleado con domicilio en <?php echo isset($_POST['direccionLab']) ? htmlspecialchars($_POST['direccionLab']) : '________'; ?>, celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los articulos 90, 92, 93, 94, 95 y concordantes de la Ley de Contrato de Trabajo No. 20744.
        </textarea>
        <br>

        <input type="submit" value="Enviar">
    </form>

    <?php 
    // Procesar el formulario y mostrar el contrato modificado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ciudad = htmlspecialchars($_POST['ciudad']);
        $empresa = htmlspecialchars($_POST['empresa']);
        $nombre = htmlspecialchars($_POST['nombre']);
        $nombre2 = htmlspecialchars($_POST['nombre2']);
        $direccion = htmlspecialchars($_POST['direccion']);
        $direccionLab = htmlspecialchars($_POST['direccionLab']);

        echo "<h2>Vista previa del contrato:</h2>";

        echo "<p>En la ciudad de $ciudad, se acuerda entre la Empresa $empresa representada por el Sr. $nombre en su carácter de Apoderado, con domicilio en la calle $direccion y el Sr. $nombre2, futuro empleado con domicilio en $direccionLab, celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los articulos 90, 92, 93, 94, 95 y concordantes de la Ley de Contrato de Trabajo No. 20744.</p>";
    }
    ?>

</body>

</html>
