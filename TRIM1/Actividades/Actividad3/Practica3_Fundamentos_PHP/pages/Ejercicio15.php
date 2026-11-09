<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 15</title>
    <link rel="stylesheet" type="text/css" href="../estilos/miestilo.css" />
</head>
<body>
    <h1>Ejercicio 15</h1>

    <?php
        // Ejercicio 15: Contar letras
        $frase = "This is a test";
        $letra = "t";

        // Contamos la frecuencia de la letra 't' minúscula con substr_count()
        $contador = substr_count($frase, $letra);

        // Muestra el resultado formateado
        echo "<p style='font-size: 18px; margin-top: 35px;'>La letra '<strong>$letra</strong>' minúscula aparece <strong>$contador</strong> veces en la frase \"<em>$frase</em>\".</p>";
    ?>

    <!-- Botón para volver a la página principal -->
    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>

