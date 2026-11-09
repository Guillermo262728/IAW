<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 16</title>
    <link rel="stylesheet" type="text/css" href="../estilos/miestilo.css" />
</head>
<body>
    <h1>Ejercicio 16</h1>
    <h2>Resultados de las operaciones:</h2>

    <?php
        // Ejercicio 16: Cálculos con GET
        // Recibe por URL los parámetros primerNumero y segundoNumero.
        // Si no se reciben por URL, se asignan los valores de ejemplo 4 y 5
        $primerParam = isset($_GET['primerNumero']) ? $_GET['primerNumero'] : 4;
        $segundoParam = isset($_GET['segundoNumero']) ? $_GET['segundoNumero'] : 5;

        // Comprobación de que ambos parámetros sean numéricos
        if (!is_numeric($primerParam) || !is_numeric($segundoParam)) {
            echo "<p style='color: #ffb4b4; font-size: 18px;'>Error: Ambos parámetros deben ser valores numéricos.</p>";
            echo "<p>Ejemplo de uso: <code>Ejercicio16.php?primerNumero=4&segundoNumero=5</code></p>";
        } else {
            // Conversión a valores numéricos
            $num1 = $primerParam + 0;
            $num2 = $segundoParam + 0;

            // Resto de dividir el primer número entre 5
            $restoEntre5 = $num1 % 5;

            // Suma de ambos números
            $suma = $num1 + $num2;

            echo "<p style='font-size: 18px;'>El resto de dividir $num1 entre 5 es: <strong>$restoEntre5</strong></p>";

            // Evitar división por cero
            if ($num2 == 0) {
                echo "<p style='color: #ffb4b4; font-size: 18px;'>No se puede dividir entre cero ($num1 / $num2).</p>";
            } else {
                $cociente = $num1 / $num2;
                echo "<p style='font-size: 18px;'>El resultado de dividir $num1 entre $num2 es: <strong>$cociente</strong></p>";
            }

            echo "<p style='font-size: 18px;'>El resultado de sumar $num1 y $num2 es: <strong>$suma</strong></p>";
        }
    ?>

    <!-- Botón para volver a la página principal -->
    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>

