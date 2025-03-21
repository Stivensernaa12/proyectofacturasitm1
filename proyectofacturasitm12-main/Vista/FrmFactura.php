<?php
class FrmFactura {
    private CtrFactura $controlador;

    public function __construct() {
        $this->controlador = new CtrFactura();
    }

    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $factura = $this->controlador->crearFactura(new DateTime($_POST['fecha']), $_POST['numero'], $_POST['total']);
            echo "Factura creada con número: " . $factura->getNumero();
        }
    }

    public function mostrarFormulario() {
        echo '<form method="POST">
                Fecha: <input type="date" name="fecha"><br>
                Número: <input type="number" name="numero"><br>
                Total: <input type="text" name="total"><br>
                <input type="submit" value="Guardar">
              </form>';
    }
}

$vista = new FrmFactura();
$vista->mostrarFormulario();
$vista->guardar();
?>