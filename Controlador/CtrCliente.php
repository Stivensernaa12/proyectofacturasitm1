<?php
require_once '../Modelo/Cliente.php';

class CtrCliente {
    private array $clientes = [];

    public function agregarCliente(Cliente $cliente): void {
        $this->clientes[] = $cliente;
    }

    public function obtenerClientes(): array {
        return $this->clientes;
    }

    public function buscarClientePorCodigo(string $codigo): ?Cliente {
        foreach ($this->clientes as $cliente) {
            if ($cliente->codigo === $codigo) {
                return $cliente;
            }
        }
        return null;
    }

    public function actualizarCredito(string $codigo, float $nuevoCredito): bool {
        $cliente = $this->buscarClientePorCodigo($codigo);
        if ($cliente !== null) {
            $cliente->setCredito($nuevoCredito);
            return true;
        }
        return false;
    }
}
?>