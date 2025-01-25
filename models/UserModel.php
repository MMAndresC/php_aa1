<?php

class UserModel
{
    private $users = [
        ['username' => 'admin', 'password' => '1234', 'email' => 'admin@admin.com'],
        ['username' => 'Mar', 'password' => '1234', 'email' => 'mar@admin.com']
    ];

    public function checkUser($username, $password): bool {
        foreach ($this->users as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                return true;
            }
        }
        return false;
    }

    public function getEmailUser($username): string {
        foreach ($this->users as $user) {
            if ($user['username'] === $username) {
                return $user['email'];
            }
        }
    }
}