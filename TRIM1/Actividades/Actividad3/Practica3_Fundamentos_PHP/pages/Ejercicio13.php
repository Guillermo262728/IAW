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
        // Anio actual y nacimiento para tener 35 anios
        $anioActual = (int)date('Y');
        $anioNacimiento = $anioActual - 35;

        // Calculo de edades y anios
        $edadActual = $anioActual - $anioNacimiento;
        $edadEn10 = $edadActual + 10;
        $anioEn10 = $anioActual + 10;

        $edadHace10 = $edadActual - 10;
        $anioHace10 = $anioActual - 10;

        // Calculamos la jubilacion a los 67
        $edadJubilacion = 67;
        $anioJubilacion = $anioNacimiento + $edadJubilacion;

        echo "<h2 style='font-size: 26px; margin-top: 25px;'>Edad actual: $edadActual años</h2>";
        echo "<p style='font-size: 18px;'>En 10 años tendrás $edadEn10 años, y será el año $anioEn10</p>";
        echo "<p style='font-size: 18px;'>Hace 10 años tenías $edadHace10 años, y era el año $anioHace10</p>";
        echo "<p style='font-size: 18px;'>Te jubilarás en el año $anioJubilacion cuando tengas $edadJubilacion años</p>";
    ?>

    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>
