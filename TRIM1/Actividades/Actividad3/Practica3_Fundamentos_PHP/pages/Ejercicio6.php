<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6</title>
    <link rel="stylesheet" type="text/css" href="../estilos/miestilo.css" />
</head>
<body>
    <h1>Ejercicio 6</h1>

    <?php
        // Ejercicio 6: Círculo de color aleatorio
        // Genera valores aleatorios para crear un color en formato RGB
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b = rand(0, 255);
        $colorAleatorio = "rgb($r, $g, $b)";

        // Dibuja un círculo de radio 50px (diámetro 100px) con el color aleatorio
        echo "<div style='width: 100px; height: 100px; background-color: $colorAleatorio; border-radius: 50%; margin: 30px auto; box-shadow: 0 4px 10px rgba(0,0,0,0.25);'></div>";
    ?>

    <!-- Botón para volver a la página principal -->
    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>

