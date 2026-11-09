<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 9</title>
    <link rel="stylesheet" type="text/css" href="../estilos/miestilo.css" />
</head>
<body>
    <h1>Ejercicio 9</h1>

    <?php
        // Ejercicio 9: Fecha y hora
        // Se configura la zona horaria a Europe/Madrid para sincronizar fecha y hora locales
        date_default_timezone_set('Europe/Madrid');

        // Obtención de la fecha y hora actuales del servidor
        $fechaActual = date('d-m-Y');
        $horaActual = date('H:i:s');

        // Muestra la información obtenida
        echo "<h2 style='font-weight: normal; margin-top: 30px;'>Hora de servidor</h2>";
        echo "<p style='font-size: 18px;'>La fecha actual es: <strong>$fechaActual</strong></p>";
        echo "<p style='font-size: 18px;'>La hora actual es: <strong>$horaActual</strong></p>";
    ?>

    <!-- Botón para volver a la página principal -->
    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>

