<?php
class CtrProducto {
    public function crearProducto(string $codigo, string $nombre, int $stock, float $valorUnitario): Producto {
        return new Producto($codigo, $nombre, $stock, $valorUnitario);
    }

    public function actualizarStock(Producto $producto, int $nuevoStock): void {
        $producto->setStock($nuevoStock);
    }

    public function obtenerValorUnitario(Producto $producto): float {
        return $producto->getValorUnitario();
    }
}
?>