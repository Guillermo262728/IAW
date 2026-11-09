<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 21</title>
    <link rel="stylesheet" type="text/css" href="../estilos/miestilo.css" />
    <style>
        /* Ajuste de ancho de tabla para visualizar el texto cómodamente */
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
        // Ejercicio 21: Juego de palabras
        // 1. Definición por separado de las intervenciones de Groucho y Chico
        $groucho = "-Preste mucha atención a la primera cláusula, porque es muy importante. Dice: \"La parte contratante de la primera parte será considerada como... la parte contratante de la primera parte.\" ¿Qué le parece eso? Está genial, ¿eh?";
        $chico = "-No, no sirve para nada.";

        // 2. Mostrar el diálogo completo, uniendo ambas intervenciones separadas por un espacio
        $dialogoCompleto = $groucho . " " . $chico;

        // 3. Generar una segunda versión sustituyendo la palabra «primera» por «segunda»
        $dialogoSegundaClausula = str_replace("primera", "segunda", $dialogoCompleto);

        // 4. Posición en la que comienza la intervención de Chico dentro del diálogo completo
        $posicionChico = strpos($dialogoCompleto, $chico);

        // 5. Cálculo del porcentaje de caracteres de cada interlocutor respecto al total
        // (sin contar el espacio de separación utilizado para unirlas)
        $lenGroucho = strlen($groucho);
        $lenChico = strlen($chico);
        $totalCaracteres = $lenGroucho + $lenChico;

        $porcentajeGroucho = round(($lenGroucho / $totalCaracteres) * 100, 2);
        $porcentajeChico = round(($lenChico / $totalCaracteres) * 100, 2);
    ?>

    <!-- 6. Presentación de todos los resultados en una tabla HTML -->
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

    <!-- Botón para volver a la página principal -->
    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>

