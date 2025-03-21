<?php
class Producto {
    private string $codigo;
    private string $nombre;
    private int $stock;
    private float $valorUnitario;

    public function __construct(string $codigo, string $nombre, int $stock, float $valorUnitario) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->stock = $stock;
        $this->valorUnitario = $valorUnitario;
    }

    public function getCodigo(): string {
        return $this->codigo;
    }

    public function setCodigo(string $codigo): void {
        $this->codigo = $codigo;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function getStock(): int {
        return $this->stock;
    }

    public function setStock(int $stock): void {
        $this->stock = $stock;
    }

    public function getValorUnitario(): float {
        return $this->valorUnitario;
    }

    public function setValorUnitario(float $valorUnitario): void {
        $this->valorUnitario = $valorUnitario;
    }
}
?>