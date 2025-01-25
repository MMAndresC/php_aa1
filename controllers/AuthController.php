<?php

namespace controllers;

use UserModel;

require_once __DIR__ . '/../models/UserModel.php';
require_once __DIR__ . '/../utils/utils.php';

class AuthController
{
    public function login($user, $password){
        $userModel = new UserModel();
        $existUser = $userModel->checkUser($user, $password);

        if ($existUser) {
            $path = getBaseURL();
            header("Location: $path/views/ifElse.php");
            exit(); //Failsafe to stop script
        } else {
            header('WWW-Authenticate: Basic realm="Área Restringida"');
            header('HTTP/1.0 401 Unauthorized');
            echo "Usuario o contraseña incorrectos.";
            exit();
        }
    }
}