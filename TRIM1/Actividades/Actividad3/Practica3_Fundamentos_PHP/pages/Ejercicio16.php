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
        // Parametros por GET o valores por defecto
        $num1 = isset($_GET['primerNumero']) ? $_GET['primerNumero'] : 4;
        $num2 = isset($_GET['segundoNumero']) ? $_GET['segundoNumero'] : 5;

        // Comprobamos que sean numericos
        if (!is_numeric($num1) || !is_numeric($num2)) {
            echo "<p style='color: red;'>Debes pasar dos valores numéricos por URL.</p>";
        } else {
            // Resto de dividir entre 5
            $resto = $num1 % 5;
            echo "<p style='font-size: 18px;'>El resto de dividir $num1 entre 5 es: <strong>$resto</strong></p>";

            // Cociente evitando dividir entre 0
            if ($num2 == 0) {
                echo "<p style='color: red;'>No se puede dividir entre cero.</p>";
            } else {
                $cociente = $num1 / $num2;
                echo "<p style='font-size: 18px;'>El resultado de dividir $num1 entre $num2 es: <strong>$cociente</strong></p>";
            }

            // Suma
            $suma = $num1 + $num2;
            echo "<p style='font-size: 18px;'>El resultado de sumar $num1 y $num2 es: <strong>$suma</strong></p>";
        }
    ?>

    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>
