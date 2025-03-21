<?php
class Empresa {
    private string $codigo;
    private string $nombre;

    public function __construct(string $codigo, string $nombre) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function getNombre(): string {
        return $this->nombre;
    }
}
?>