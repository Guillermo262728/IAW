<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 11</title>
    <link rel="stylesheet" type="text/css" href="../estilos/miestilo.css" />
</head>
<body>
    <h1>Ejercicio 11</h1>
    <h2>Datos Personales</h2>

    <?php
        // Ejercicio 11: Datos personales
        // Declaración de variables con datos de ejemplo ficticios
        $nombre = "Alberto";
        $primerApellido = "Cifuentes";
        $segundoApellido = "García";
        $email = "alberto.cifuentes@riberadeltajo.com";
        $anioNacimiento = 1990;
        $telefono = "123456789";
    ?>

    <!-- Tabla HTML con los datos personales formateados -->
    <table>
        <tbody>
            <tr>
                <th>Nombre</th>
                <td><?php echo $nombre; ?></td>
            </tr>
            <tr>
                <th>Primer Apellido</th>
                <td><?php echo $primerApellido; ?></td>
            </tr>
            <tr>
                <th>Segundo Apellido</th>
                <td><?php echo $segundoApellido; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <th>Año de Nacimiento</th>
                <td><?php echo $anioNacimiento; ?></td>
            </tr>
            <tr>
                <th>Teléfono</th>
                <td><?php echo $telefono; ?></td>
            </tr>
        </tbody>
    </table>

    <!-- Botón para volver a la página principal -->
    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>

