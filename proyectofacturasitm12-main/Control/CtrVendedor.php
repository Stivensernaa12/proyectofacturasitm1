<?php 
class CtrVendedor {
    public function crearVendedor(string $codigo, string $email, string $nombre, string $telefono, int $carne, string $direccion): Vendedor {
        return new Vendedor($codigo, $email, $nombre, $telefono, $carne, $direccion);
    }

    public function actualizarDireccion(Vendedor $vendedor, string $nuevaDireccion): void {
        $vendedor->setDireccion($nuevaDireccion);
    }

    public function obtenerCarne(Vendedor $vendedor): int {
        return $vendedor->getCarne();
    }
}
?>