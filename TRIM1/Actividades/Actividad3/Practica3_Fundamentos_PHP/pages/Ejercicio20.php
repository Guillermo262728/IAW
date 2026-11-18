<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 20</title>
    <link rel="stylesheet" type="text/css" href="../estilos/miestilo.css" />
</head>
<body>
    <h1>Ejercicio 20</h1>
    <h2>Información del Servidor</h2>

    <?php
        // Datos del servidor y de PHP
        $nombreServidor = $_SERVER['SERVER_NAME'];
        $softwareServidor = $_SERVER['SERVER_SOFTWARE'];
        $versionPhp = phpversion();
    ?>

    <table>
        <thead>
            <tr>
                <th>Dato</th>
                <th>Información</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nombre del Servidor</td>
                <td><?php echo $nombreServidor; ?></td>
            </tr>
            <tr>
                <td>Software del Servidor</td>
                <td><?php echo $softwareServidor; ?></td>
            </tr>
            <tr>
                <td>Versión de PHP</td>
                <td><?php echo $versionPhp; ?></td>
            </tr>
        </tbody>
    </table>

    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>
