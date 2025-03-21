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

    public function getFecha(): DateTime {
        return $this->fecha;
    }

    public function setFecha(DateTime $fecha): void {
        $this->fecha = $fecha;
    }

    public function getNumero(): int {
        return $this->numero;
    }

    public function setNumero(int $numero): void {
        $this->numero = $numero;
    }

    public function getTotal(): float {
        return $this->total;
    }

    public function setTotal(float $total): void {
        $this->total = $total;
    }
}
?>