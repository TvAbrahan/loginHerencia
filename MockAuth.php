<?php
require_once 'AuthInterface.php';

class MockAuth implements AuthInterface {

    private $users = [
        "admin" => "1234",
        "user" => "abcd"
    ];

    public function login($username, $password) {
        if(empty($username) || empty($password)){
            throw new Exception("Todos los campos son obligatorios");
        }

        if(!isset($this->users[$username])){
            throw new Exception("Usuario no existe");
        }

        if($this->users[$username] !== $password){
            throw new Exception("Contraseña incorrecta");
        }

        return "Bienvenido $username";
    }
}