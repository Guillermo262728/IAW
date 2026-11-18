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
        // Datos personales de ejemplo
        $nombre = "Alberto";
        $primerApellido = "Cifuentes";
        $segundoApellido = "García";
        $email = "alberto.cifuentes@riberadeltajo.com";
        $anioNacimiento = 1990;
        $telefono = "123456789";
    ?>

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

    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>
