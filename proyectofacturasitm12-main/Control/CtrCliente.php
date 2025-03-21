<?php 
class CtrCliente {
    public function crearCliente(string $codigo, string $email, string $nombre, string $telefono, float $credito): Cliente {
        return new Cliente($codigo, $email, $nombre, $telefono, $credito);
    }

    public function actualizarCredito(Cliente $cliente, float $nuevoCredito): void {
        $cliente->setCredito($nuevoCredito);
    }

    public function obtenerCredito(Cliente $cliente): float {
        return $cliente->getCredito();
    }
}
?>