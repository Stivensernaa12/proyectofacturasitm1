<?php

require_once 'Persona.php';

class Vendedor extends Persona {
    private $carnet;
    private $direccion;

    public function __construct($codigo, $email, $nombre, $telefono, $carnet, $direccion) {
        parent::__construct($codigo, $email, $nombre, $telefono);
        $this->carnet = $carnet;
        $this->direccion = $direccion;
    }

    public function guardar() {
        parent::guardar();
        $conexion = Conexion::conectar();
        $sql = "INSERT INTO Vendedor (codigo, carnet, direccion) VALUES (?, ?, ?)";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$this->codigo, $this->carnet, $this->direccion]);
    }

    public function actualizar() {
        parent::actualizar();
        $conexion = Conexion::conectar();
        $sql = "UPDATE Vendedor SET carnet = ?, direccion = ? WHERE codigo = ?";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$this->carnet, $this->direccion, $this->codigo]);
    }

    public function eliminar() {
        $conexion = Conexion::conectar();
        $sql = "DELETE FROM Vendedor WHERE codigo = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->execute([$this->codigo]);
        return parent::eliminar();
    }
}

?>
