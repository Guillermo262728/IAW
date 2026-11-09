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
        // Ejercicio 12: Signo de un número
        // Definición de la variable numérica
        $numero = -15;

        // Comprobación de signo mediante estructura condicional if/elseif/else
        if ($numero > 0) {
            $clasificacion = "es positivo.";
        } elseif ($numero < 0) {
            $clasificacion = "es negativo.";
        } else {
            $clasificacion = "es igual a cero.";
        }

        // Muestra el resultado
        echo "<p style='font-size: 18px; margin-top: 30px;'>El número $numero $clasificacion</p>";
    ?>

    <!-- Botón para volver a la página principal -->
    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>

