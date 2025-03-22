<?php

require_once '../controlador/CtrProducto.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $stock = $_POST['stock'];
    $valorUnitario = $_POST['valorUnitario'];
    
    $producto = new CtrProducto($codigo, $nombre, $stock, $valorUnitario);
    $producto->guardar();
    echo "<p>Producto guardado correctamente.</p>";
}

$productos = CtrProducto::obtenerTodos();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Productos</title>
</head>
<body>
    <h2>Agregar Producto</h2>
    <form method="POST">
        Código: <input type="text" name="codigo" required><br>
        Nombre: <input type="text" name="nombre" required><br>
        Stock: <input type="number" name="stock" required><br>
        Valor Unitario: <input type="text" name="valorUnitario" required><br>
        <input type="submit" value="Guardar">
    </form>

    <h2>Lista de Productos</h2>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Stock</th>
            <th>Valor Unitario</th>
        </tr>
        <?php foreach ($productos as $p) { ?>
            <tr>
                <td><?php echo $p['codigo']; ?></td>
                <td><?php echo $p['nombre']; ?></td>
                <td><?php echo $p['stock']; ?></td>
                <td><?php echo $p['valorUnitario']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
