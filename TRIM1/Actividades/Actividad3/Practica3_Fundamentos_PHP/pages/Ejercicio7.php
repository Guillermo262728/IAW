<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7</title>
    <link rel="stylesheet" type="text/css" href="../estilos/miestilo.css" />
</head>
<body>
    <h1>Ejercicio 7</h1>

    <?php
        // Tirada de dos dados
        $dado1 = rand(1, 6);
        $dado2 = rand(1, 6);
        $sumaTotal = $dado1 + $dado2;

        // Mostramos las dos caras obtenidas
        echo "<div style='margin-top: 25px;'>";
        echo "<img src='../imagenes/dado{$dado1}.PNG' alt='Dado 1' style='width: 85px; height: 85px; margin: 10px; border-radius: 8px;' />";
        echo "<img src='../imagenes/dado{$dado2}.PNG' alt='Dado 2' style='width: 85px; height: 85px; margin: 10px; border-radius: 8px;' />";
        echo "</div>";

        // Mostramos la suma
        echo "<div style='display: flex; justify-content: center; align-items: center; gap: 10px; margin-top: 15px; font-size: 18px;'>";
        echo "<span>Total:</span>";
        echo "<div style='display: inline-block; min-width: 45px; padding: 6px 14px; background-color: rgba(255, 255, 255, 0.25); border: 2px solid #8ab0e2; border-radius: 6px; font-size: 24px; font-weight: bold; color: #ffffff;'>$sumaTotal</div>";
        echo "</div>";
    ?>

    <a href="../index.html" class="boton_personalizado boton_volver">Volver</a>
</body>
</html>
