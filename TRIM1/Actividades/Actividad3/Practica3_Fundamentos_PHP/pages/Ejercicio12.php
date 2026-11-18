<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 12</title>
    <link rel="stylesheet" type="text/css" href="../estilos/miestilo.css" />
</head>
<body>
    <h1>Ejercicio 12</h1>

    <?php
        $numero = -15;

        // Comprobamos el signo del numero
        if ($numero > 0) {
            $clasificacion = "es positivo.";
        } elseif ($numero < 0) {
            $clasificacion = "es negativo.";
        } else {
            $clasificacion = "es igual a cero.";
        }

        echo "<p style='font-size: 18px; margin-top: 30px;'>El número $numero $clasificacion</p>";
    ?>

    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>
