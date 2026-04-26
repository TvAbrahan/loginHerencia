<?php

abstract class BaseAuthenticator {



    abstract protected function findUser(string $email);

    public function login(string $email, string $password) {
        $user = $this->findUser($email);

    if ($user === null) {
        throw new Exception("Usuario no encontrado");
        }

    if ($user['password'] !== $password) {
        throw new Exception("contraseña incorrecta.");
        }

    return "Bienvenido " . $user['email'];
    }
}