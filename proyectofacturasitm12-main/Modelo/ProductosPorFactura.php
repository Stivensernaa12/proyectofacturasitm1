 <?php
 class ProductosPorFactura {
    private int $cantidad;
    private float $subtotal;

    public function __construct(int $cantidad, float $subtotal) {
        $this->cantidad = $cantidad;
        $this->subtotal = $subtotal;
    }

    public function getCantidad(): int {
        return $this->cantidad;
    }

    public function setCantidad(int $cantidad): void {
        $this->cantidad = $cantidad;
    }

    public function getSubtotal(): float {
        return $this->subtotal;
    }

    public function setSubtotal(float $subtotal): void {
        $this->subtotal = $subtotal;
    }
}
?>