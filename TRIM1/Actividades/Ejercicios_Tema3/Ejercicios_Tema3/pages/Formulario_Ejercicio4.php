<?php
$numero = filter_input(INPUT_GET, 'numero', FILTER_VALIDATE_INT);
$valido = $numero !== null && $numero !== false && $numero > 0;
$suma = 0;
if ($valido) { for ($i=2; $i<$numero; $i+=2) { $suma += $i; } }
?>
<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Resultado del ejercicio 4</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"><link rel="stylesheet" href="../estilos/estilos.css"></head>
<body><main class="container my-4"><h1>Ejercicio 4. Suma de pares anteriores</h1>
<?php if ($valido): ?><p>La suma de los números pares anteriores a <?= $numero ?> es <strong><?= $suma ?></strong>.</p><?php else: ?><p class="alert alert-danger">Introduce un número entero positivo válido.</p><?php endif; ?>
<a class="btn btn-primary" href="../index.php#ejercicio4">Volver al formulario</a></main></body></html>
