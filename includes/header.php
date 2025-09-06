<?php
require_once __DIR__ . '/../config/app.php'; // Load app config first
require_once __DIR__ . '/../vendor/autoload.php'; // Load Composer packages
require_once __DIR__ . '/functions.php';   // Load helper functions

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Generate CSRF token if it doesn't exist for this session
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['csrf_token'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Use BASE_URL for consistency -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css">
    <title>Halamina <?php echo isset($page_title) ? '- ' . htmlspecialchars($page_title) : ''; ?></title>
    <!-- Add payment gateway JS scripts if needed (e.g., Stripe.js) -->
    <?php if (isset($include_stripe_js) && $include_stripe_js): ?>
        <!-- <script src="https://js.stripe.com/v3/"></script> -->
    <?php endif; ?>
</head>

<body>
    <header class="header">
        <a href="<?php echo BASE_URL; ?>index.php" class="logo-link"><img class="logo" src="<?php echo BASE_URL; ?>img/lilieArlene_imgTrace.svg" alt="Halamina Logo"></a>
        <div class="header__text-content">
            <h1 class="header__title">Halamina</h1>
            <p class="header_sub">The restaurant with effect on your tongue.</p>
        </div>
        <nav class="header__nav">
            <ul>
                <li><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                <li><a href="<?php echo BASE_URL; ?>about.php">About</a></li>
                <li><a href="<?php echo BASE_URL; ?>book-table.php">Book Table</a></li>
                <li><a href="<?php echo BASE_URL; ?>delivery.php">Delivery</a></li>
                <li><a href="<?php echo BASE_URL; ?>contact.php">Contact</a></li>
                <?php if (is_logged_in()): ?>
                    <!-- Add links for logged-in users if needed (e.g., My Orders) -->
                    <li><a href="<?php echo BASE_URL; ?>actions/logout.php">Logout (<?php echo htmlspecialchars($_SESSION['user_name']); ?>)</a></li>
                <?php else: ?>
                    <li><a href="<?php echo BASE_URL; ?>login.php">Login</a></li>
                    <li><a href="<?php echo BASE_URL; ?>register.php">Register</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <?php display_flash_message('success'); ?>
    <?php display_flash_message('error'); ?>