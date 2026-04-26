<?php

abstract class BaseAuthenticator {


    abstract protected function findUser(string $email);

    public function login(string $email, string $password) {
        if(empty($email) || empty($password)) {
            throw new Exception("Todos los campos son obligatorios");
        }
        $user = $this->findUser($email);

    if ($user === null) {
        throw new Exception("Usuario no encontrado");
        }

    if ($user['password'] !== $password) {
        throw new Exception("Contraseña incorrecta.");
        }

    return "Bienvenido " . $user['email'];
    }
}