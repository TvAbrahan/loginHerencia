<?php
require_once 'MockAuth.php';

$message = "";

if($_POST){
    $auth = new MockAuth();

    try {
        $message = $auth->login($_POST['username'], $_POST['password']);
    } catch (Exception $e) {
        $message = $e->getMessage();
    }
}
?>