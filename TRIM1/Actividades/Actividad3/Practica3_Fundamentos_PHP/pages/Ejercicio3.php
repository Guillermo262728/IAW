<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" type="text/css" href="../estilos/miestilo.css" />
</head>
<body>
    <h1>Ejercicio 3</h1>

    <?php
        // Tirada aleatoria del dado
        $caraDado = rand(1, 6);

        // Mostramos la imagen de la cara que ha salido
        echo "<div style='margin-top: 20px;'>";
        echo "<img src='../imagenes/dado{$caraDado}.PNG' alt='Dado' style='width: 90px; height: 90px; border-radius: 8px;' />";
        echo "</div>";
    ?>

    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>
