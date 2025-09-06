<?php
// Redirect helper
function redirect($path)
{
    header("Location: " . BASE_URL . $path);
    exit();
}

// Check login status
function is_logged_in()
{
    return isset($_SESSION['user_id']);
}

// Require login for certain pages
function require_login()
{
    if (!is_logged_in()) {
        set_flash_message('error', 'You must be logged in to access that page.');
        redirect('login.php');
    }
}

// Flash messages
function set_flash_message($key, $message)
{
    $_SESSION['flash'][$key] = $message;
}

function display_flash_message($key)
{
    if (isset($_SESSION['flash'][$key])) {
        $message = $_SESSION['flash'][$key];
        unset($_SESSION['flash'][$key]);
        // Choose classes based on key (e.g., success/error)
        $class = ($key === 'success') ? 'form-confirmation' : 'form-error'; // You'll need to style .form-error
        echo "<div class='$class' style='margin: 15px; padding: 15px; border-radius: 4px; /* ... add specific styles ... */'>" . htmlspecialchars($message) . "</div>";
    }
}

// CSRF Validation
function validate_csrf_token($token)
{
    if (isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token)) {
        // Token is valid, unset it after use for single-use tokens (optional but safer)
        // unset($_SESSION['csrf_token']);
        return true;
    }
    return false;
}
