<?php
session_start();
require_once 'MockAuth.php';

// Limpiar mensaje anterior
if(!isset($_SESSION['flash'])){
    $_SESSION['flash'] = null;
}

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $auth = new MockAuth();

    try {
        $msg = $auth->login($_POST['username'], $_POST['password']);

        $_SESSION['flash'] = [
            "mensaje" => $msg,
            "tipo" => "success"
        ];

    } catch (Exception $e) {

        $_SESSION['flash'] = [
            "mensaje" => $e->getMessage(),
            "tipo" => "error"
        ];
    }

    // Redirige después de guardar mensaje
    header("Location: index.php");
    exit();
}
?>