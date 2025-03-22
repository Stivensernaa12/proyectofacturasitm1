<?php

require_once '../controlador/CtrFactura.php';
require_once '../controlador/CtrCliente.php';

$clientes = CtrCliente::obtenerTodos();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fecha = $_POST['fecha'];
    $numero = $_POST['numero'];
    $total = $_POST['total'];
    $codigo_cliente = $_POST['codigo_cliente'];
    
    $factura = new CtrFactura($fecha, $numero, $total, $codigo_cliente);
    $factura->guardar();
    echo "<p>Factura guardada correctamente.</p>";
}

$facturas = CtrFactura::obtenerTodos();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Facturas</title>
</head>
<body>
    <h2>Agregar Factura</h2>
    <form method="POST">
        Fecha: <input type="date" name="fecha" required><br>
        Número: <input type="text" name="numero" required><br>
        Total: <input type="text" name="total" required><br>
        Cliente:
        <select name="codigo_cliente" required>
            <?php foreach ($clientes as $c) { ?>
                <option value="<?php echo $c['codigo']; ?>"><?php echo $c['nombre']; ?></option>
            <?php } ?>
        </select><br>
        <input type="submit" value="Guardar">
    </form>

    <h2>Lista de Facturas</h2>
    <table border="1">
        <tr>
            <th>Fecha</th>
            <th>Número</th>
            <th>Total</th>
            <th>Cliente</th>
        </tr>
        <?php foreach ($facturas as $f) { ?>
            <tr>
                <td><?php echo $f['fecha']; ?></td>
                <td><?php echo $f['numero']; ?></td>
                <td><?php echo $f['total']; ?></td>
                <td><?php echo $f['codigo_cliente']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
