<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 21</title>
    <link rel="stylesheet" type="text/css" href="../estilos/miestilo.css" />
    <style>
        table.tabla-dialogo {
            max-width: 900px;
            width: 90%;
            text-align: left;
        }
        table.tabla-dialogo th {
            text-align: center;
        }
        table.tabla-dialogo td:first-child {
            font-weight: bold;
            white-space: nowrap;
            vertical-align: top;
            width: 25%;
        }
        table.tabla-dialogo td:last-child {
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Ejercicio 21</h1>
    <h2>Resultados de las Operaciones con Cadenas</h2>

    <?php
        // Frases de Groucho y Chico
        $groucho = "-Preste mucha atención a la primera cláusula, porque es muy importante. Dice: \"La parte contratante de la primera parte será considerada como... la parte contratante de la primera parte.\" ¿Qué le parece eso? Está genial, ¿eh?";
        $chico = "-No, no sirve para nada.";

        // Unimos ambas frases
        $dialogoCompleto = $groucho . " " . $chico;

        // Cambiamos 'primera' por 'segunda'
        $dialogoSegundaClausula = str_replace("primera", "segunda", $dialogoCompleto);

        // Posicion donde empieza Chico
        $posicionChico = strpos($dialogoCompleto, $chico);

        // Porcentaje de caracteres de cada uno
        $lenGroucho = strlen($groucho);
        $lenChico = strlen($chico);
        $total = $lenGroucho + $lenChico;

        $porcentajeGroucho = round(($lenGroucho / $total) * 100, 2);
        $porcentajeChico = round(($lenChico / $total) * 100, 2);
    ?>

    <table class="tabla-dialogo">
        <thead>
            <tr>
                <th>Operación</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>GROUCHO</td>
                <td><?php echo $groucho; ?></td>
            </tr>
            <tr>
                <td>CHICO</td>
                <td><?php echo $chico; ?></td>
            </tr>
            <tr>
                <td>GUION PRIMERA CLÁUSULA</td>
                <td><?php echo $dialogoCompleto; ?></td>
            </tr>
            <tr>
                <td>GUION SEGUNDA CLÁUSULA</td>
                <td><?php echo $dialogoSegundaClausula; ?></td>
            </tr>
            <tr>
                <td>COMIENZO INTERVENCIÓN CHICO</td>
                <td>Posición: <?php echo $posicionChico; ?></td>
            </tr>
            <tr>
                <td>% POSESIÓN PALABRA GROUCHO</td>
                <td><?php echo $porcentajeGroucho; ?>%</td>
            </tr>
            <tr>
                <td>% POSESIÓN PALABRA CHICO</td>
                <td><?php echo $porcentajeChico; ?>%</td>
            </tr>
        </tbody>
    </table>

    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>
