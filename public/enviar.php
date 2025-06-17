<?php
require_once __DIR__ . '/../controllers/CorreoController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $remitente = $_POST['remitente'];
    $destinatario = $_POST['destinatario'];
    $asunto = $_POST['asunto'];
    $descripcion = $_POST['descripcion'];
    $archivo = isset($_FILES['archivo']) ? $_FILES['archivo'] : null;

    $correo = new Correo($remitente, $destinatario, $asunto, $descripcion, $archivo);
    $controller = new CorreoController();
    $resultado = $controller->enviar($correo);

    if ($resultado === true) {
        header('Location: index.php?success=1');
        exit;
    } else {
        echo "Error en el envío: $resultado";
    }
}