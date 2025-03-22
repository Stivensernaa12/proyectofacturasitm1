<?php
require_once '../Control/CtrEmpresa.php'; // Ajuste la ruta según sea necesario

class FrmEmpresa {
    private CtrEmpresa $control;

    public function __construct() {
        $this->control = new CtrEmpresa();
    }

    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $empresa = $this->control->crearEmpresa($_POST['codigo'], $_POST['nombre']);
            echo "Empresa creada: " . $empresa->getNombre();
        }
    }

    public function mostrarFormulario() {
        echo '<form method="POST">
                Código: <input type="text" name="codigo"><br>
                Nombre: <input type="text" name="nombre"><br>
                <input type="submit" value="Guardar">
              </form>';
    }
}

$vista = new FrmEmpresa();
$vista->mostrarFormulario();
$vista->guardar();
?>
