<?php

require_once '../controlador/CtrProductosPorFactura.php';
require_once '../controlador/CtrFactura.php';
require_once '../controlador/CtrProducto.php';

$facturas = CtrFactura::obtenerTodos();
$productos = CtrProducto::obtenerTodos();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero_factura = $_POST['numero_factura'];
    $codigo_producto = $_POST['codigo_producto'];
    $cantidad = $_POST['cantidad'];
    $subtotal = $_POST['subtotal'];
    
    $relacion = new CtrProductosPorFactura($numero_factura, $codigo_producto, $cantidad, $subtotal);
    $relacion->guardar();
    echo "<p>Producto agregado a la factura correctamente.</p>";
}

$productosPorFactura = CtrProductosPorFactura::obtenerTodos();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Productos en Factura</title>
</head>
<body>
    <h2>Agregar Producto a Factura</h2>
    <form method="POST">
        Factura:
        <select name="numero_factura" required>
            <?php foreach ($facturas as $f) { ?>
                <option value="<?php echo $f['numero']; ?>">Factura #<?php echo $f['numero']; ?></option>
            <?php } ?>
        </select><br>
        Producto:
        <select name="codigo_producto" required>
            <?php foreach ($productos as $p) { ?>
                <option value="<?php echo $p['codigo']; ?>"><?php echo $p['nombre']; ?></option>
            <?php } ?>
        </select><br>
        Cantidad: <input type="number" name="cantidad" required><br>
        Subtotal: <input type="text" name="subtotal" required><br>
        <input type="submit" value="Guardar">
    </form>

    <h2>Lista de Productos en Facturas</h2>
    <table border="1">
        <tr>
            <th>Factura</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
        </tr>
        <?php foreach ($productosPorFactura as $pf) { ?>
            <tr>
                <td><?php echo $pf['numero_factura']; ?></td>
                <td><?php echo $pf['codigo_producto']; ?></td>
                <td><?php echo $pf['cantidad']; ?></td>
                <td><?php echo $pf['subtotal']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html> //