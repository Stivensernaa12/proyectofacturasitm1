<?php
require_once '../Control/CtrPersona.php'; // Inluir el control

$control = new CtrPersona();

// Verificar si se envió un formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["accion"])) {
        switch ($_POST["accion"]) {
            case "ingresar":
                $nombre = trim($_POST["nombre"]);
                $apellido = trim($_POST["apellido"]);
                $email = trim($_POST["email"]);
                $control->ingresar($nombre, $apellido, $email);
                break;

            case "eliminar":
                $id = intval($_POST["id"]);
                $control->eliminar($id);
                break;
        }
    }
}

// Obtener la lista de personas
$personas = $control->listar();

// Recorrer la lista de personas y mostrarlas
foreach ($personas as $persona) {
    echo "ID: " . $persona['id'] . " | ";
    echo "Nombre: " . $persona['nombre'] . " | ";
    echo "Apellido: " . $persona['apellido'] . " | ";
    echo "Email: " . $persona['email'] . "<br>";
}
// Cerrar la etiqueta PHP correctamente
?>
