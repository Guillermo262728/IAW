<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 10</title>
    <link rel="stylesheet" type="text/css" href="../estilos/miestilo.css" />
</head>
<body>
    <h1>Ejercicio 10</h1>
    <h2>Resultados de las Operaciones</h2>

    <?php
        // Ejercicio 10: Calculadora I
        // Declaración de las variables numéricas requeridas
        $x = 166;
        $y = 999;

        // Cálculo de las operaciones matemáticas básicas
        $suma = $x + $y;
        $resta = $x - $y;
        $multiplicacion = $x * $y;
        $division = $x / $y;
    ?>

    <!-- Presentación de los valores y resultados en una tabla HTML -->
    <table>
        <thead>
            <tr>
                <th>Operación</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Valor de x</td>
                <td><?php echo $x; ?></td>
            </tr>
            <tr>
                <td>Valor de y</td>
                <td><?php echo $y; ?></td>
            </tr>
            <tr>
                <td>Suma</td>
                <td><?php echo $suma; ?></td>
            </tr>
            <tr>
                <td>Resta</td>
                <td><?php echo $resta; ?></td>
            </tr>
            <tr>
                <td>Multiplicación</td>
                <td><?php echo $multiplicacion; ?></td>
            </tr>
            <tr>
                <td>División</td>
                <td><?php echo $division; ?></td>
            </tr>
        </tbody>
    </table>

    <!-- Botón para volver a la página principal -->
    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>

