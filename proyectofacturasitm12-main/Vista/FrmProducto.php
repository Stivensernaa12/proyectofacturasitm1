<?php
require_once '../Control/CtrProducto.php'; // Ajuste la ruta según sea necesario

class FrmProducto {
    private CtrProducto $control;

    public function __construct() {
        $this->control = new CtrProducto();
    }

    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $producto = $this->control->crearProducto($_POST['codigo'], $_POST['nombre'], $_POST['stock'], $_POST['valorUnitario']);
            echo "Producto creado: " . $producto->getNombre();
        }
    }

    public function mostrarFormulario() {
        echo '<form method="POST">
                Código: <input type="text" name="codigo"><br>
                Nombre: <input type="text" name="nombre"><br>
                Stock: <input type="number" name="stock"><br>
                Valor Unitario: <input type="text" name="valorUnitario"><br>
                <input type="submit" value="Guardar">
              </form>';
    }
}

$vista = new FrmProducto();
$vista->mostrarFormulario();
$vista->guardar();
?>
