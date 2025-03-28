<?php

require_once 'Conexion.php';

class Persona {
    protected $codigo;
    protected $email;
    protected $nombre;
    protected $telefono;

    public function __construct($codigo, $email, $nombre, $telefono) {
        $this->codigo = $codigo;
        $this->email = $email;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
    }

    public function guardar() {
        $conexion = Conexion::conectar();
        $sql = "INSERT INTO Persona (codigo, email, nombre, telefono) VALUES (?, ?, ?, ?)";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$this->codigo, $this->email, $this->nombre, $this->telefono]);
    }

    public static function obtenerTodos() {
        $conexion = Conexion::conectar();
        $sql = "SELECT * FROM Persona";
        $stmt = $conexion->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function actualizar() {
        $conexion = Conexion::conectar();
        $sql = "UPDATE Persona SET email = ?, nombre = ?, telefono = ? WHERE codigo = ?";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$this->email, $this->nombre, $this->telefono, $this->codigo]);
    }

    public function eliminar() {
        $conexion = Conexion::conectar();
        $sql = "DELETE FROM Persona WHERE codigo = ?";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$this->codigo]);
    }
}

?>
