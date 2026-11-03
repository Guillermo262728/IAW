<?php
// index.php
// No tiene la estructura recomendada del proyecto. 

// configuración de las variables de conexión a la BD. 
$dbHost = '10.10.10.20';
$dbName = 'departamentos';
$dbUser = 'director';             // Usuario con el que accede
$dbPass = '1234';                 // Contraseña del usuario 
$dbCharset = 'utf8mb4';

$show = ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['show']));

$departamentos = [];
$error = null;

if ($show) {
    $dsn = "mysql:host=$dbHost;dbname=$dbName;charset=$dbCharset";
    $opts = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
        $pdo = new PDO($dsn, $dbUser, $dbPass, $opts);

        $stmt = $pdo->query('SELECT dept_no, dnombre, loc FROM departamentos ORDER BY dept_no');
        $departamentos = $stmt->fetchAll();
    } catch (PDOException $e) {
        $error = "Error al conectar o consultar la base de datos: " . htmlspecialchars($e->getMessage());
    }
}
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Departamentos</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 24px;
            background: #f7f7f7
        }

        .card {
            background: #fff;
            padding: 18px;
            border-radius: 6px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
            max-width: 900px
        }

        h1 {
            margin-top: 0
        }

        form {
            margin-bottom: 16px
        }

        table {
            border-collapse: collapse;
            width: 100%
        }

        th,
        td {
            padding: 8px 10px;
            border: 1px solid #ddd;
            text-align: left
        }

        th {
            background: #f0f0f0
        }

        .error {
            color: #b00020;
            margin: 8px 0
        }

        .no-data {
            color: #666
        }

        button {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 8px 14px;
            border-radius: 4px;
            cursor: pointer
        }

        button:hover {
            background: #0056b3
        }
    </style>
</head>

<body>
    <div class="card">
        <h1>Departamentos</h1>
        <p>Pulse el botón para obtener la lista de departamentos desde la base de datos <code>departamentos</code>.</p>

        <form method="post" action="">
            <button type="submit" name="show" value="1">Mostrar departamentos</button>
        </form>

        <?php if ($error): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>

        <?php if ($show): ?>
            <?php if (empty($departamentos)): ?>
                <p class="no-data">No se encontraron departamentos en la base de datos.</p>
            <?php else: ?>
                <table aria-label="Tabla de departamentos">
                    <thead>
                        <tr>
                            <th>Dept. Nº</th>
                            <th>Nombre</th>
                            <th>Localidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($departamentos as $d): ?>
                            <tr>
                                <td><?= htmlspecialchars($d['dept_no']) ?></td>
                                <td><?= htmlspecialchars($d['dnombre']) ?></td>
                                <td><?= htmlspecialchars($d['loc']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        <?php endif; ?>

    </div>
</body>

</html>