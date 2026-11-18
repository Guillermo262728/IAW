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
        // Generamos valores RGB aleatorios
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b = rand(0, 255);
        $colorAleatorio = "rgb($r, $g, $b)";

        // Rectangulo con el color generado
        echo "<div style='width: 380px; height: 120px; background-color: $colorAleatorio; margin: 30px auto; border-radius: 6px;'></div>";
    ?>

    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>
