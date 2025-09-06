<?php
// Turn on error reporting for development
error_reporting(E_ALL);
ini_set('display_errors', 1); // REMOVE or set to 0 in production!

define('DB_HOST', 'localhost');
define('DB_USER', 'root'); // Your DB user
define('DB_PASS', '');     // Your DB password
define('DB_NAME', 'halamina_db');

function connectDB()
{
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4';
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Throw exceptions on error
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Fetch associative arrays
        PDO::ATTR_EMULATE_PREPARES   => false,                  // Use native prepared statements
    ];
    try {
        $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        return $pdo;
    } catch (\PDOException $e) {
        // In production, log this error instead of echoing
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}
