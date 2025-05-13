<?php
// defining paths
define('BASE_PATH', dirname(__DIR__));
define('PUBLIC_PATH', BASE_PATH . '/public');
define('APP_PATH', BASE_PATH . '/app');

// DB configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'multigenda_db');
define('DB_USER', 'root');
define('DB_PASS', '');

// App settings
define('APP_NAME', 'Multigenda');
define('APP_URL', 'http://localhost/Multigenda/public');

// Starting a session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Simple autoloader
spl_autoload_register(function ($class) {
    $paths = [
        APP_PATH . '/controllers/',
        APP_PATH . '/models/',
        APP_PATH . '/lib/'
    ];
    
    foreach ($paths as $path) {
        $file = $path . $class . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});


// assets path 
function asset($path) {
    return APP_URL . '/assets/' . ltrim($path, '/');
}