<?php
class Factura {
    private DateTime $fecha;
    private int $numero;
    private float $total;

    public function __construct(DateTime $fecha, int $numero, float $total) {
        $this->fecha = $fecha;
        $this->numero = $numero;
        $this->total = $total;
    }

    public function setTotal(float $total): void {
        $this->total = $total;
    }

    public function getNumero(): int {
        return $this->numero;
    }
}
?>