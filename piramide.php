<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pirámide de Asteriscos</title>
</head>
<body>
    <form method="POST" action="">
        Ingrese la altura de la pirámide: <input type="number" name="altura" min="1" required><br>
        <input type="submit" value="Generar Pirámide">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $altura = intval($_POST['altura']);

        // Generar la pirámide
        for ($i = 1; $i <= $altura; $i++) {
            // Imprimir espacios en blanco
            for ($j = 1; $j <= $altura - $i; $j++) {
                echo "&nbsp;&nbsp;";
            }

            // Imprimir asteriscos
            for ($k = 1; $k <= (2 * $i - 1); $k++) {
                echo "*";
            }

            // Nueva línea después de cada fila
            echo "<br>";
        }
    }
    ?>
</body>
</html>
