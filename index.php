<?php

use controllers\AuthController;

require_once 'controllers/AuthController.php';
$authController = new AuthController();
$authController->login($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']);

?>