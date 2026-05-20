<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema PSR-4 - Tienda</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <header>
        <h1>🛒 Sistema de Tienda</h1>
        <p>Laboratorio PSR-4 con Composer</p>
    </header>

    <main>
        <div class="formularios">

            <!-- Formulario Productos -->
            <div class="card">
                <h2>Agregar Producto</h2>
                <form method="POST">
                    <input type="text" name="nombre" placeholder="Nombre del producto" required>
                    <input type="number" name="precio" placeholder="Precio" step="0.01" required>
                    <button type="submit" name="agregar_producto">Agregar</button>
                </form>
            </div>

            <!-- Formulario Clientes -->
            <div class="card">
                <h2>Agregar Cliente</h2>
                <form method="POST">
                    <input type="text" name="nombre" placeholder="Nombre del cliente" required>
                    <input type="email" name="email" placeholder="Correo electrónico" required>
                    <button type="submit" name="agregar_cliente">Agregar</button>
                </form>
            </div>

        </div>

        <div class="tablas">

            <!-- Tabla Productos -->
            <div class="card">
                <h2>📦 Productos</h2>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($controller->getProductos() as $i => $producto): ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td><?= htmlspecialchars($producto->getNombre()) ?></td>
                            <td>$<?= number_format($producto->getPrecio(), 2) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- Tabla Clientes -->
            <div class="card">
                <h2>👥 Clientes</h2>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($controller->getClientes() as $i => $cliente): ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td><?= htmlspecialchars($cliente->getNombre()) ?></td>
                            <td><?= htmlspecialchars($cliente->getEmail()) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </main>

</body>
</html>