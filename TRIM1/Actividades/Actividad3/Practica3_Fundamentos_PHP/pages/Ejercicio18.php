<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 18</title>
    <link rel="stylesheet" type="text/css" href="../estilos/miestilo.css" />
</head>
<body>
    <h1>Ejercicio 18</h1>

    <?php
        // Ejercicio 18: Comprobaciones numéricas
        // Inicialización de variables con sus tipos iniciales
        $numFloat = 3.14;
        $variableSinValor = null;

        // Comprobaciones iniciales usando is_float() e is_null()
        $esFloat1 = is_float($numFloat) ? "Sí" : "No";
        $esNull1 = is_null($variableSinValor) ? "Sí" : "No";

        echo "<p style='font-size: 18px; margin-top: 25px;'>¿$numFloat es float? <strong>$esFloat1</strong></p>";
        echo "<p style='font-size: 18px;'>¿La variable sin valor es null? <strong>$esNull1</strong></p>";

        // Modificamos los tipos de las variables
        $numFloat = 10;                     // Ahora es un entero
        $variableSinValor = "Texto asignado"; // Ahora contiene un string

        // Nuevas comprobaciones
        $esFloat2 = is_float($numFloat) ? "Sí" : "No";
        $esNull2 = is_null($variableSinValor) ? "Sí" : "No";

        echo "<p style='font-size: 18px;'>¿$numFloat es float? <strong>$esFloat2</strong></p>";
        echo "<p style='font-size: 18px;'>¿La variable con texto es null? <strong>$esNull2</strong></p>";
    ?>

    <!-- Botón para volver a la página principal -->
    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>

