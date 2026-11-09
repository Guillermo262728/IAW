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
        // Ejercicio 20: Información del servidor
        // Obtención de variables superglobales del servidor y funciones de PHP
        $nombreServidor = isset($_SERVER['SERVER_NAME']) && !empty($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'localhost';
        $softwareServidor = isset($_SERVER['SERVER_SOFTWARE']) ? $_SERVER['SERVER_SOFTWARE'] : 'Servidor Web Apache';
        $versionPhp = phpversion();
    ?>

    <!-- Tabla HTML para presentar la información técnica -->
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

    <!-- Botón para volver a la página principal -->
    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>

