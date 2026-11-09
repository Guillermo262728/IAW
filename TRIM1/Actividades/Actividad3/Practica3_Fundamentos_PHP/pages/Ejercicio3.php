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
        // Ejercicio 3: Dado II
        // Genera un número aleatorio entre 1 y 6
        $caraDado = rand(1, 6);

        // Representa gráficamente la cara correspondiente mediante la imagen
        echo "<div style='margin-top: 20px;'>";
        echo "<img src='../imagenes/dado{$caraDado}.PNG' alt='Dado cara $caraDado' style='width: 90px; height: 90px; border-radius: 8px;' />";
        echo "</div>";
    ?>

    <!-- Botón para volver a la página principal -->
    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>

