<?php
include 'BaseAuthenticator.php';

class Authenticator extends BaseAuthenticator {

    private array $users = [
        ['email' => 'carlos@app.com', 'password' => '1234'],
        ['email' => 'tuliodickens@gmail.com', 'password' => 'abcd']
    ];

    private int $attempts = 0;

    protected function findUser(string $email): ?array {
        foreach ($this->users as $user) {
            if ($user['email'] === $email) return $user;
        }
        return null;
    }
}