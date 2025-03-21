<?php
// Incluir la clase base Persona
require_once __DIR__ . '/Persona.php';

class Cliente extends Persona {
    private float $credito;

    /**
     * Constructor de la clase Cliente
     *
     * @param string $codigo
     * @param string $email
     * @param string $nombre
     * @param string $telefono
     * @param float $credito
     */
    public function __construct(string $codigo, string $email, string $nombre, string $telefono, float $credito) {
        parent::__construct($codigo, $email, $nombre, $telefono);
        $this->credito = $credito;
    }

    /**
     * Obtiene el crédito del cliente.
     *
     * @return float
     */
    public function getCredito(): float {
        return $this->credito;
    }

    /**
     * Establece el crédito del cliente.
     *
     * @param float $credito
     * @return void
     */
    public function setCredito(float $credito): void {
        $this->credito = $credito;
    }
}
?>
