<?php
require_once '../Control/CtrPersona.php'; // Ajuste la ruta según sea necesario

class FrmPersona {
    private CtrPersona $control;

    public function __construct() {
        $this->control = new CtrPersona();
    }

    public function ingresar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $persona = $this->control->crearPersona($_POST['codigo'], $_POST['email'], $_POST['nombre'], $_POST['telefono']);
            echo "Persona creada: " . $persona->getNombre();
        }
    }

    public function mostrarFormulario() {
        echo '<form method="POST">
                Código: <input type="text" name="codigo"><br>
                Email: <input type="email" name="email"><br>
                Nombre: <input type="text" name="nombre"><br>
                Teléfono: <input type="text" name="telefono"><br>
                <input type="submit" value="Guardar">
              </form>';
    }
}

$vista = new FrmPersona();
$vista->mostrarFormulario();
$vista->ingresar();
?>
