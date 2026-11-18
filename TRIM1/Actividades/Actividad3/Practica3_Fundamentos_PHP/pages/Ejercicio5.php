<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" type="text/css" href="../estilos/miestilo.css" />
</head>
<body>
    <h1>Ejercicio 5</h1>

    <?php
        // Longitud aleatoria entre 1 y 1000 px
        $longitud = rand(1, 1000);

        echo "<p style='font-size: 18px;'>Longitud de la línea: $longitud píxeles</p>";
        // Dibujamos la linea horizontal
        echo "<div style='width: {$longitud}px; height: 4px; background-color: #5ea1e0; margin: 25px auto; border-radius: 2px;'></div>";
    ?>

    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>
