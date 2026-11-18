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
        // Recogemos los parametros por GET o usamos valores por defecto
        $num1 = isset($_GET['num1']) ? $_GET['num1'] : 3;
        $num2 = isset($_GET['num2']) ? $_GET['num2'] : 4;
        $num3 = isset($_GET['num3']) ? $_GET['num3'] : 5;

        // Validamos que sean numeros
        if (!is_numeric($num1) || !is_numeric($num2) || !is_numeric($num3)) {
            echo "<p style='color: red;'>Debes introducir 3 números por URL (num1, num2 y num3).</p>";
        } else {
            // Operaciones
            $suma = $num1 + $num2 + $num3;
            $producto = $num1 * $num2 * $num3;
            $media = $suma / 3;
            $maximo = max($num1, $num2, $num3);
            $minimo = min($num1, $num2, $num3);
    ?>

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

    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>
