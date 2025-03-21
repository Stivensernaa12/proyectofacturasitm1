<?php
require_once '../Control/CtrCliente.php'; // Ajuste la ruta según sea necesario
$control = new CtrCliente();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST["codigo"];
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $credito = $_POST["credito"];
    
    $control->guardarCliente($codigo, $nombre, $email, $telefono, $credito);
}
?>
