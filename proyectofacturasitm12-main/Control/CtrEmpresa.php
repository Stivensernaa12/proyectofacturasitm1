<?php 
class CtrEmpresa {
    public function crearEmpresa(string $codigo, string $nombre): Empresa {
        return new Empresa($codigo, $nombre);
    }

    public function actualizarNombre(Empresa $empresa, string $nuevoNombre): void {
        $empresa->setNombre($nuevoNombre);
    }

    public function obtenerNombre(Empresa $empresa): string {
        return $empresa->getNombre();
    }
}
?>