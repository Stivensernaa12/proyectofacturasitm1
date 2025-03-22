<?php
class Cliente {
    private string $codigo;
    private string $email;
    private string $nombre;
    private string $telefono;
    private float $credito;

    public function __construct(string $codigo, string $email, string $nombre, string $telefono, float $credito) {
        $this->codigo = $codigo;
        $this->email = $email;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->credito = $credito;
    }

    public function setCredito(float $credito): void {
        $this->credito = $credito;
    }

    public function getCredito(): float {
        return $this->credito;
    }
}
?>