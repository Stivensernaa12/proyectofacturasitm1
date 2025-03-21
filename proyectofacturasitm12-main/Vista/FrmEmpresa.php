<?php
class FrmEmpresa {
    private CtrEmpresa $controlador;

    public function __construct() {
        $this->controlador = new CtrEmpresa();
    }

    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $empresa = $this->controlador->crearEmpresa($_POST['codigo'], $_POST['nombre']);
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
