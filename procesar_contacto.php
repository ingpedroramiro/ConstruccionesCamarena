<?php

// Verificar si el formulario fue enviado usando el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos enviados a través del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    // Validar que todos los campos necesarios estén presentes
    if (!empty($nombre) && !empty($email) && !empty($asunto) && !empty($mensaje)) {
        // Configurar el correo
    } else {
        echo "Por favor, completa todos los campos.";
    }
}
?>
