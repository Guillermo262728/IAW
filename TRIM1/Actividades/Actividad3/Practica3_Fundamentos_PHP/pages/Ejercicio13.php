<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 13</title>
    <link rel="stylesheet" type="text/css" href="../estilos/miestilo.css" />
</head>
<body>
    <h1>Ejercicio 13</h1>

    <?php
        // Ejercicio 13: Cálculo de edad
        // Se obtiene el año actual dinámicamente desde el servidor
        $anioActual = (int)date('Y');

        // Año de nacimiento de ejemplo (determinado para mostrar 35 años actuales)
        $anioNacimiento = $anioActual - 35;

        // Cálculos de edades y años futuros/pasados
        $edadActual = $anioActual - $anioNacimiento;
        $edadEn10 = $edadActual + 10;
        $anioEn10 = $anioActual + 10;

        $edadHace10 = $edadActual - 10;
        $anioHace10 = $anioActual - 10;

        // Cálculo de jubilación a los 67 años
        $edadJubilacion = 67;
        $anioJubilacion = $anioNacimiento + $edadJubilacion;

        // Muestra de resultados
        echo "<h2 style='font-size: 26px; margin-top: 25px;'>Edad actual: $edadActual años</h2>";
        echo "<p style='font-size: 18px;'>En 10 años tendrás $edadEn10 años, y será el año $anioEn10</p>";
        echo "<p style='font-size: 18px;'>Hace 10 años tenías $edadHace10 años, y era el año $anioHace10</p>";
        echo "<p style='font-size: 18px;'>Te jubilarás en el año $anioJubilacion cuando tengas $edadJubilacion años</p>";
    ?>

    <!-- Botón para volver a la página principal -->
    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>

