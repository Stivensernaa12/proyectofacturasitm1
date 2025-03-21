<?php
class CtrProductosPorFactura {
    public function agregarProductoAFactura(int $cantidad, float $subtotal): ProductosPorFactura {
        return new ProductosPorFactura($cantidad, $subtotal);
    }

    public function actualizarCantidad(ProductosPorFactura $productosPorFactura, int $nuevaCantidad): void {
        $productosPorFactura->setCantidad($nuevaCantidad);
    }

    public function obtenerSubtotal(ProductosPorFactura $productosPorFactura): float {
        return $productosPorFactura->getSubtotal();
    }
}
?>