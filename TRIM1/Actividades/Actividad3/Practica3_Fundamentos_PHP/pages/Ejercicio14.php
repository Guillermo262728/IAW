<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 14</title>
    <link rel="stylesheet" type="text/css" href="../estilos/miestilo.css" />
</head>
<body>
    <h1>Ejercicio 14</h1>

    <?php
        // Lista de emoticonos
        $emoticonos = [
            '😀', '😃', '😄', '😁', '😆', '😅', '😂', '🤣',
            '😊', '😇', '🙂', '🙃', '😉', '😌', '😍', '🥰',
            '😘', '😋', '😛', '😜', '🤪', '🤩', '🥳', '😎',
            '🤓', '🧐', '🤠', '🤯', '😱', '🤫', '🤔', '😴'
        ];

        // Escogemos uno aleatorio
        $indice = array_rand($emoticonos);
        $emoticono = $emoticonos[$indice];

        echo "<div style='font-size: 85px; margin-top: 30px;'>$emoticono</div>";
    ?>

    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>
