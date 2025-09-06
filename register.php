<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Halamina - Register</title>
</head>

<body>
    <?php include "./includes/header.php" ?>

    <main class="main page-main-content auth-page">
        <h1>Create Your Account</h1>

        <form action="#" method="POST" class="site-form auth-form">
            <div class="form-group">
                <label for="register-name">Full Name:</label>
                <input type="text" id="register-name" name="register_name" required>
            </div>
            <div class="form-group">
                <label for="register-email">Email:</label>
                <input type="email" id="register-email" name="register_email" required>
            </div>
            <div class="form-group">
                <label for="register-password">Password:</label>
                <input type="password" id="register-password" name="register_password" required minlength="8">
                <small>Minimum 8 characters.</small>
            </div>
            <div class="form-group">
                <label for="register-confirm-password">Confirm Password:</label>
                <input type="password" id="register-confirm-password" name="register_confirm_password" required>
            </div>
            <div class="form-group">
                <input type="checkbox" id="agree-register-terms" name="agree_register_terms" required>
                <label for="agree-register-terms" class="inline-label">I agree to the Halamina <a
                        href="/privacy-policy">Terms & Privacy Policy</a>.</label>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        <p class="auth-switch">Already have an account? <a href="login.html">Login here</a>.</p>
    </main>

    <?php include "./includes/footer.php" ?>
    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
        // Add JavaScript for password confirmation matching if desired (client-side validation)
    </script>
</body>

</html>