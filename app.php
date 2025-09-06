<?php
// IMPORTANT: Set your base URL correctly for redirects and links
define('BASE_URL', 'http://localhost/halamina/'); // Include trailing slash!

// Session configuration (more secure defaults)
ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);
session_set_cookie_params([
    'lifetime' => 1800, // 30 minutes
    'path' => '/',
    'domain' => "", // Set your domain in production
    'secure' => isset($_SERVER['HTTPS']), // Send only over HTTPS (essential for production)
    'httponly' => true, // Prevent JS access to cookie
    'samesite' => 'Lax' // CSRF protection baseline
]);
