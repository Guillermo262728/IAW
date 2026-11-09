<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 19</title>
    <link rel="stylesheet" type="text/css" href="../estilos/miestilo.css" />
</head>
<body>
    <h1>Ejercicio 19</h1>
    <h2>Resultados de las operaciones</h2>

    <?php
        // Ejercicio 19: Calculadora II
        // Recibe mediante GET los parámetros num1, num2 y num3.
        // Se establecen valores por defecto (3, 4, 5) en caso de no especificarse por URL
        $param1 = isset($_GET['num1']) ? $_GET['num1'] : 3;
        $param2 = isset($_GET['num2']) ? $_GET['num2'] : 4;
        $param3 = isset($_GET['num3']) ? $_GET['num3'] : 5;

        // Comprobación de que los tres parámetros sean numéricos
        if (!is_numeric($param1) || !is_numeric($param2) || !is_numeric($param3)) {
            echo "<p style='color: #ffb4b4; font-size: 18px;'>Error: Todos los parámetros deben ser números válidos.</p>";
            echo "<p>Ejemplo de llamada: <code>Ejercicio19.php?num1=3&num2=4&num3=5</code></p>";
        } else {
            // Conversión numérica
            $num1 = $param1 + 0;
            $num2 = $param2 + 0;
            $num3 = $param3 + 0;

            // Cálculos matemáticos
            $suma = $num1 + $num2 + $num3;
            $producto = $num1 * $num2 * $num3;
            $media = $suma / 3;
            $maximo = max($num1, $num2, $num3);
            $minimo = min($num1, $num2, $num3);
    ?>

    <!-- Tabla HTML con los resultados de las operaciones -->
    <table>
        <thead>
            <tr>
                <th>Operación</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Número 1</td>
                <td><?php echo $num1; ?></td>
            </tr>
            <tr>
                <td>Número 2</td>
                <td><?php echo $num2; ?></td>
            </tr>
            <tr>
                <td>Número 3</td>
                <td><?php echo $num3; ?></td>
            </tr>
            <tr>
                <td>Suma de los 3 números</td>
                <td><?php echo $suma; ?></td>
            </tr>
            <tr>
                <td>Producto de los 3 números</td>
                <td><?php echo $producto; ?></td>
            </tr>
            <tr>
                <td>Media de los 3 números</td>
                <td><?php echo $media; ?></td>
            </tr>
            <tr>
                <td>Número máximo</td>
                <td><?php echo $maximo; ?></td>
            </tr>
            <tr>
                <td>Número mínimo</td>
                <td><?php echo $minimo; ?></td>
            </tr>
        </tbody>
    </table>

    <?php
        }
    ?>

    <!-- Botón para volver a la página principal -->
    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>

