<?php
require_once '../app/config/config.php';
require_once '../app/controllers/AuthController.php';

$page = $_GET['page'] ?? 'home';
$action = $_GET['action'] ?? 'index';

// Route the request
switch ($page) {
    case 'auth':
        $controller = new AuthController();
        break;
    default:
        $controller = new AuthController();
        $action = 'login';
}

if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    header("HTTP/1.0 404 Not Found");
    echo "Page not found";
    exit();
}