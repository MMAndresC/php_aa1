<?php

namespace controllers;

use UserModel;

require_once __DIR__ . '/../models/UserModel.php';
require_once __DIR__ . '/../utils/utils.php';

class AuthController
{
    var int $hourMs = 3600;
    var float $numberOfHours = 0.025;

    public function login($user, $password){
        $userModel = new UserModel();
        $existUser = $userModel->checkUser($user, $password);

        if ($existUser) {
            $path = getBaseURL();
            //Set cookie
            $this->setCookie($user);
            //Set session
            $this->setSession($user);
            header("Location: $path/views/ifElse.php");
            exit(); //Failsafe to stop script
        } else {
            header('WWW-Authenticate: Basic realm="Área Restringida"');
            header('HTTP/1.0 401 Unauthorized');
            echo "Usuario o contraseña incorrectos.";
            exit();
        }
    }

    public function setCookie($user): void {
        $lifeTime = time() + ($this->numberOfHours * $this->hourMs);
        setcookie("php_aa1", $user, $lifeTime, "/");
    }

    public function setSession($user): void {
        $userModel = new UserModel();
        $email = $userModel->getEmailUser($user);
        session_start();
        $_SESSION["username"] = $user;
        $_SESSION["email"] = $email;
    }

    function logout() {
        // Init session if not active
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Clean var session & destroy
        session_unset();
        session_destroy();

        // Delete cookie
        if (isset($_COOKIE['php_aa1'])) {
            setcookie('php_aa1', '', time() - 3600, '/'); // Expire cookie
        }
        header('HTTP/1.1 401 Unauthorized');
        header('WWW-Authenticate: Basic realm="Área Restringida"');

        // Redirect
        $path = getBaseURL();
        $path = substr($path, 0, strpos($path, "views"));
        $script = "index.php";
        header("Location: $path$script");
        exit();
    }

}