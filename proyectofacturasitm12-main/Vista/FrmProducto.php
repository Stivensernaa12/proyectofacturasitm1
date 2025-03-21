<?php
class FrmProducto {
    private CtrProducto $controlador;

    public function __construct() {
        $this->controlador = new CtrProducto();
    }

    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $producto = $this->controlador->crearProducto($_POST['codigo'], $_POST['nombre'], $_POST['stock'], $_POST['valorUnitario']);
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
