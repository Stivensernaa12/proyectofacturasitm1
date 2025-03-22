<?php

require_once '../controlador/CtrVendedor.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $codigo = $_POST['codigo'];
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $carnet = $_POST['carnet'];
    $direccion = $_POST['direccion'];
    
    $vendedor = new CtrVendedor($codigo, $email, $nombre, $telefono, $carnet, $direccion);
    $vendedor->guardar();
    echo "<p>Vendedor guardado correctamente.</p>";
}

$vendedores = CtrVendedor::obtenerTodos();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Vendedores</title>
</head>
<body>
    <h2>Agregar Vendedor</h2>
    <form method="POST">
        Código: <input type="text" name="codigo" required><br>
        Email: <input type="email" name="email" required><br>
        Nombre: <input type="text" name="nombre" required><br>
        Teléfono: <input type="text" name="telefono" required><br>
        Carnet: <input type="text" name="carnet" required><br>
        Dirección: <input type="text" name="direccion" required><br>
        <input type="submit" value="Guardar">
    </form>

    <h2>Lista de Vendedores</h2>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Email</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Carnet</th>
            <th>Dirección</th>
        </tr>
        <?php foreach ($vendedores as $v) { ?>
            <tr>
                <td><?php echo $v['codigo']; ?></td>
                <td><?php echo $v['email']; ?></td>
                <td><?php echo $v['nombre']; ?></td>
                <td><?php echo $v['telefono']; ?></td>
                <td><?php echo $v['carnet']; ?></td>
                <td><?php echo $v['direccion']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
