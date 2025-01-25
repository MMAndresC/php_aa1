<?php

class UserModel
{
    private $users = [
        ['username' => 'admin', 'password' => '1234'],
        ['username' => 'Mar', 'password' => '1234'],
        ['username' => 'm@gmail.com', 'password' => '1234']
    ];

    public function checkUser($username, $password): bool {
        foreach ($this->users as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                return true;
            }
        }
        return false;
    }
}