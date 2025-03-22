<?php

require_once '../controlador/CtrPersona.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $codigo = $_POST['codigo'];
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    
    $persona = new CtrPersona($codigo, $email, $nombre, $telefono);
    $persona->guardar();
    echo "<p>Persona guardada correctamente.</p>";
}

$personas = CtrPersona::obtenerTodos();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Persona</title>
</head>
<body>
    <h2>Agregar Persona</h2>
    <form method="POST">
        Código: <input type="text" name="codigo" required><br>
        Email: <input type="email" name="email" required><br>
        Nombre: <input type="text" name="nombre" required><br>
        Teléfono: <input type="text" name="telefono" required><br>
        <input type="submit" value="Guardar">
    </form>

    <h2>Lista de Persona</h2>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Email</th>
            <th>Nombre</th>
            <th>Teléfono</th>
        </tr>
        <?php foreach ($personas as $p) { ?>
            <tr>
                <td><?php echo $p['codigo']; ?></td>
                <td><?php echo $p['email']; ?></td>
                <td><?php echo $p['nombre']; ?></td>
                <td><?php echo $p['telefono']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
