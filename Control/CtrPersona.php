<?php
class CtrPersona {
    public function crearPersona(string $codigo, string $email, string $nombre, string $telefono): Persona {
        return new Persona($codigo, $email, $nombre, $telefono);
    }

    public function actualizarEmail(Persona $persona, string $nuevoEmail): void {
        $persona->setEmail($nuevoEmail);
    }

    public function obtenerNombre(Persona $persona): string {
        return $persona->getNombre();
    }
}
?>