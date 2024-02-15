<?php
session_start();

// Validar la entrada del usuario
$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$contraseña = filter_input(INPUT_POST, 'contraseña', FILTER_SANITIZE_STRING);

// Función para validar las credenciales del usuario
function autenticarUsuario($usuario, $contraseña) {
    $valid_users = [
        'admin' => 'asd',
        'cliente' => '123',
    ];

    return array_key_exists($usuario, $valid_users) && $valid_users[$usuario] === $contraseña;
}

// Validar las credenciales del usuario
if (!autenticarUsuario($usuario, $contraseña)) {
    header("Location: error.php?error=credenciales_incorrectas");
    exit;
}

$_SESSION['usuario'] = $usuario;

if ($usuario === 'admin') {
    header("Location: admin.php");
} else {
    header("Location: Cliente.php");
}
?>