<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 17</title>
    <link rel="stylesheet" type="text/css" href="../estilos/miestilo.css" />
</head>
<body>
    <h1>Ejercicio 17</h1>

    <?php
        // Ejercicio 17: Cadenas I
        // Frase original indicada en la práctica
        $fraseOriginal = "Hay una cosa peor que un programa que no funciona como debe, un programa que funciona como no debe";

        // Eliminación de todos los espacios en blanco
        $fraseSinEspacios = str_replace(' ', '', $fraseOriginal);

        // Cálculo de las longitudes de ambas cadenas
        // Usamos mb_strlen si está disponible para soporte UTF-8, o strlen por defecto
        $longitudOriginal = function_exists('mb_strlen') ? mb_strlen($fraseOriginal) : strlen($fraseOriginal);
        $longitudSinEspacios = function_exists('mb_strlen') ? mb_strlen($fraseSinEspacios) : strlen($fraseSinEspacios);
    ?>

    <h3>Frase original:</h3>
    <p style="font-size: 16px;"><?php echo $fraseOriginal; ?></p>

    <h3>Frase sin espacios:</h3>
    <p style="font-size: 16px; word-break: break-all;"><?php echo $fraseSinEspacios; ?></p>

    <h3>Longitudes:</h3>
    <p style="font-size: 16px;">Longitud de la frase original: <strong><?php echo $longitudOriginal; ?></strong> caracteres</p>
    <p style="font-size: 16px;">Longitud de la frase sin espacios: <strong><?php echo $longitudSinEspacios; ?></strong> caracteres</p>

    <!-- Botón para volver a la página principal -->
    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>

