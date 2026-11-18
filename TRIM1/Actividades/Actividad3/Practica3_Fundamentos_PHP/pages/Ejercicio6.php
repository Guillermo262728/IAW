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
        // Color aleatorio en RGB
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b = rand(0, 255);
        $colorAleatorio = "rgb($r, $g, $b)";

        // Circulo con radio de 50px (ancho y alto de 100px)
        echo "<div style='width: 100px; height: 100px; background-color: $colorAleatorio; border-radius: 50%; margin: 30px auto;'></div>";
    ?>

    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>
