<?php

require_once '../controlador/CtrCliente.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $codigo = $_POST['codigo'];
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $credito = $_POST['credito'];
    
    $cliente = new CtrCliente($codigo, $email, $nombre, $telefono, $credito);
    if ($cliente->guardar()) {
        echo "<p>Cliente guardado correctamente.</p>";
    } else {
        echo "<p>Error al guardar el cliente.</p>";
    }
}

$clientes = CtrCliente::obtenerTodos();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Clientes</title>
</head>
<body>
    <h2>Agregar Cliente</h2>
    <form method="POST">
        Código: <input type="text" name="codigo" required><br>
        Email: <input type="email" name="email" required><br>
        Nombre: <input type="text" name="nombre" required><br>
        Teléfono: <input type="text" name="telefono" required><br>
        Crédito: <input type="text" name="credito" required><br>
        <input type="submit" value="Guardar">
    </form>

    <h2>Lista de Clientes</h2>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Email</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Crédito</th>
        </tr>
        <?php foreach ($clientes as $c) { ?>
            <tr>
                <td><?php echo $c['codigo']; ?></td>
                <td><?php echo $c['email']; ?></td>
                <td><?php echo $c['nombre']; ?></td>
                <td><?php echo $c['telefono']; ?></td>
                <td><?php echo $c['credito']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
