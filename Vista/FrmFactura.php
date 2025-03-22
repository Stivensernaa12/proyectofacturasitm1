<?php
require_once '../Control/CtrFactura.php'; // Ajuste la ruta según sea necesario

class FrmFactura {
    private CtrFactura $control;

    public function __construct() {
        $this->control = new CtrFactura();
    }

    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $factura = $this->control->crearFactura(new DateTime($_POST['fecha']), $_POST['numero'], $_POST['total']);
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