<?php
    require_once '/c:/xampp/htdocs/proyectofacturasitm1/proyectofacturasitm12-main/Control/CtrCliente.php';
    require_once '/c:/xampp/htdocs/proyectofacturasitm1/proyectofacturasitm12-main/Model/Cliente.php';

    $ctrCliente = new CtrCliente();
    $cliente = $ctrCliente->crearCliente('001', 'correo@example.com', 'Juan Pérez', '123456789', 1000.0);

    echo 'Crédito inicial: ' . $ctrCliente->obtenerCredito($cliente) . PHP_EOL;

    $ctrCliente->actualizarCredito($cliente, 2000.0);
    echo 'Crédito actualizado: ' . $ctrCliente->obtenerCredito($cliente) . PHP_EOL;
    ?>
   

