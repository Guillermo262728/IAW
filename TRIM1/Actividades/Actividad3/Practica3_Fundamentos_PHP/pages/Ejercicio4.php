<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" type="text/css" href="../estilos/miestilo.css" />
</head>
<body>
    <h1>Ejercicio 4</h1>

    <?php
        // Ejercicio 4: Color aleatorio
        // Genera valores aleatorios entre 0 y 255 para RGB
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b = rand(0, 255);
        $colorAleatorio = "rgb($r, $g, $b)";

        // Dibuja un rectángulo cuyo color de fondo cambia aleatoriamente
        echo "<div style='width: 380px; height: 120px; background-color: $colorAleatorio; margin: 30px auto; border-radius: 6px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);'></div>";
    ?>

    <!-- Botón para volver a la página principal -->
    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>

