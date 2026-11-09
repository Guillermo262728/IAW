<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" type="text/css" href="../estilos/miestilo.css" />
</head>
<body>
    <h1>Ejercicio 2</h1>

    <?php
        // Ejercicio 2: Dado
        // Genera aleatoriamente un número entero entre 1 y 6
        $numeroDado = rand(1, 6);

        // Muestra el número generado dentro de un recuadro con estilo del proyecto
        echo "<div style='display: inline-block; width: 80px; height: 80px; line-height: 80px; background-color: #8ab0e2; color: #ffffff; font-size: 48px; font-weight: bold; border-radius: 8px; margin-top: 20px;'>$numeroDado</div>";
    ?>

    <!-- Botón para volver a la página principal -->
    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>

