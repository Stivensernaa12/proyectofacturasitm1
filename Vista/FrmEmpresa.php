<?php

require_once '../controlador/CtrEmpresa.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    
    $empresa = new CtrEmpresa($codigo, $nombre);
    $empresa->guardar();
    echo "<p>Empresa guardada correctamente.</p>";
}

$empresas = CtrEmpresa::obtenerTodos();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Empresas</title>
</head>
<body>
    <h2>Agregar Empresa</h2>
    <form method="POST">
        Código: <input type="text" name="codigo" required><br>
        Nombre: <input type="text" name="nombre" required><br>
        <input type="submit" value="Guardar">
    </form>

    <h2>Lista de Empresas</h2>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Nombre</th>
        </tr>
        <?php foreach ($empresas as $e) { ?>
            <tr>
                <td><?php echo $e['codigo']; ?></td>
                <td><?php echo $e['nombre']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
