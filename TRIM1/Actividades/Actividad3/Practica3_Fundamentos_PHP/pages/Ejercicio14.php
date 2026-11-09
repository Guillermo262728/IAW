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
        // Ejercicio 14: Emoticonos
        // Colección de emoticonos en formato UTF-8
        $emoticonos = [
            '😀', '😃', '😄', '😁', '😆', '😅', '😂', '🤣',
            '😊', '😇', '🙂', '🙃', '😉', '😌', '😍', '🥰',
            '😘', '😋', '😛', '😜', '🤪', '🤩', '🥳', '😎',
            '🤓', '🧐', '🤠', '🤯', '😱', '🤫', '🤔', '😴'
        ];

        // Selección aleatoria de un índice del array
        $indiceAleatorio = array_rand($emoticonos);
        $emoticonoSeleccionado = $emoticonos[$indiceAleatorio];

        // Muestra el emoticono en gran tamaño en el centro
        echo "<div style='font-size: 85px; margin-top: 30px;'>$emoticonoSeleccionado</div>";
    ?>

    <!-- Botón para volver a la página principal -->
    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>

