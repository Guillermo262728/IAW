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
        $fraseOriginal = "Hay una cosa peor que un programa que no funciona como debe, un programa que funciona como no debe";

        // Quitamos los espacios
        $fraseSinEspacios = str_replace(' ', '', $fraseOriginal);

        // Longitudes de las frases
        $longitudOriginal = strlen($fraseOriginal);
        $longitudSinEspacios = strlen($fraseSinEspacios);
    ?>

    <h3>Frase original:</h3>
    <p style="font-size: 16px;"><?php echo $fraseOriginal; ?></p>

    <h3>Frase sin espacios:</h3>
    <p style="font-size: 16px; word-break: break-all;"><?php echo $fraseSinEspacios; ?></p>

    <h3>Longitudes:</h3>
    <p style="font-size: 16px;">Longitud de la frase original: <strong><?php echo $longitudOriginal; ?></strong> caracteres</p>
    <p style="font-size: 16px;">Longitud de la frase sin espacios: <strong><?php echo $longitudSinEspacios; ?></strong> caracteres</p>

    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>
