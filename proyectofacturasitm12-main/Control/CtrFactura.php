<?php
class CtrFactura {
    public function crearFactura(DateTime $fecha, int $numero, float $total): Factura {
        return new Factura($fecha, $numero, $total);
    }

    public function actualizarTotal(Factura $factura, float $nuevoTotal): void {
        $factura->setTotal($nuevoTotal);
    }

    public function obtenerNumero(Factura $factura): int {
        return $factura->getNumero();
    }
}
?>