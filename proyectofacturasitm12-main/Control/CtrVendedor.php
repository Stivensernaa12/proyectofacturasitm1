<?php
class Vendedor {
    private string $codigo;
    private string $email;
    private string $nombre;
    private string $telefono;
    private int $carne;
    private string $direccion;

    public function __construct(string $codigo, string $email, string $nombre, string $telefono, int $carne, string $direccion) {
        $this->codigo = $codigo;
        $this->email = $email;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->carne = $carne;
        $this->direccion = $direccion;
    }

    public function setDireccion(string $direccion): void {
        $this->direccion = $direccion;
    }

    public function getCarne(): int {
        return $this->carne;
    }
}
// Ensure you have the PHP opening and closing tags properly set, which you already do.
// To make this PHP code functional, you need to include it in a script where you instantiate the class and use its methods.

$vendedor = new Vendedor("001", "example@example.com", "Juan Perez", "123456789", 12345, "123 Main St");
echo "Carné del vendedor: " . $vendedor->getCarne();
$vendedor->setDireccion("456 Elm St");
?>