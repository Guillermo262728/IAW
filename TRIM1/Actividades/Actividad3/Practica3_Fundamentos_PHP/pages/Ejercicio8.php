<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8</title>
    <link rel="stylesheet" type="text/css" href="../estilos/miestilo.css" />
</head>
<body>
    <h1>Ejercicio 8</h1>

    <?php
        // Ejercicio 8: Mayor de tres números
        // Definición de tres variables numéricas
        $num1 = 20;
        $num2 = 30;
        $num3 = 15;

        // Determinamos el número mayor mediante la función max() de PHP
        $mayor = max($num1, $num2, $num3);

        // Muestra el resultado por pantalla
        echo "<p style='font-size: 18px; margin-top: 30px;'>El mayor de los números $num1, $num2 y $num3 es: <strong>$mayor</strong></p>";
    ?>

    <!-- Botón para volver a la página principal -->
    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>

