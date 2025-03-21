<?php
require_once '../Controlador/CtrPersona.php'; // Incluir el controlador

$controlador = new CtrPersona();

// Verificar si se envió un formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["accion"])) {
        switch ($_POST["accion"]) {
            case "ingresar":
                $nombre = trim($_POST["nombre"]);
                $apellido = trim($_POST["apellido"]);
                $email = trim($_POST["email"]);
                $controlador->ingresar($nombre, $apellido, $email);
                break;

            case "eliminar":
                $id = intval($_POST["id"]);
                $controlador->eliminar($id);
                break;
        }
    }
}

// Obtener la lista de personas
$personas = $controlador->listar();

// Mostrar resultados en formato simple
echo "Lista de Personas:\n";
foreach ($personas as $persona) {
    echo "ID: " . $persona['id'] . " | ";
    echo "Nombre: " . $persona['nombre'] . " | ";
    echo "Apellido: " . $persona['apellido'] . " | ";
    echo "Email: " . $persona['email'] . "\n";
}
?>