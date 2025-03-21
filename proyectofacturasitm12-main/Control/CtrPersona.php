<?php
require_once 'Control/CtrPersona.php';

class Persona {
	private $id;
	private $email;
	private $nombre;
	private $telefono;

	public function __construct($id, $email, $nombre, $telefono) {
		$this->id = $id;
		$this->email = $email;
		$this->nombre = $nombre;
		$this->telefono = $telefono;
	}

	public function getNombre() {
		return $this->nombre;
	}
}

$persona = new Persona('001', 'correo@example.com', 'Juan Pérez', '123456789');
echo $persona->getNombre();
?>
