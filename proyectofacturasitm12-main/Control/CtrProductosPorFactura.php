    <?php
    class ProductosPorFactura {
         private int $cantidad;
         private float $subtotal;

         public function __construct(int $cantidad, float $subtotal) {
              $this->cantidad = $cantidad;
              $this->subtotal = $subtotal;
         }

         public function setCantidad(int $cantidad): void {
              $this->cantidad = $cantidad;
         }

         public function getSubtotal(): float {
              return $this->subtotal;
         }
    }
    ?>


    <?php
    require_once 'CtrProductosPorFactura.php';

    $controlador = new CtrProductosPorFactura();
    $producto = $controlador->agregarProductoAFactura(5, 100.0);
    echo "Subtotal inicial: " . $controlador->obtenerSubtotal($producto) . "\n";

    $controlador->actualizarCantidad($producto, 10);
    echo "Cantidad actualizada.\n";
    class CtrProductosPorFactura {
        public function agregarProductoAFactura(int $cantidad, float $subtotal): ProductosPorFactura {
            return new ProductosPorFactura($cantidad, $subtotal);
        }

        public function obtenerSubtotal(ProductosPorFactura $producto): float {
            return $producto->getSubtotal();
        }

        public function actualizarCantidad(ProductosPorFactura $producto, int $nuevaCantidad): void {
            $producto->setCantidad($nuevaCantidad);
        }
    }
?>