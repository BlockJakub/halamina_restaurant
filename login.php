<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Halamina - Login</title>
</head>

<body>
    <?php include "./includes/header.php" ?>

    <main class="main page-main-content auth-page">
        <h1>Login to Your Account</h1>

        <form action="#" method="POST" class="site-form auth-form">
            <div class="form-group">
                <label for="login-email">Email or Username:</label>
                <input type="text" id="login-email" name="login_email" required>
            </div>
            <div class="form-group">
                <label for="login-password">Password:</label>
                <input type="password" id="login-password" name="login_password" required>
            </div>
            <div class="form-group form-options">
                <label for="remember-me" class="inline-label">
                    <input type="checkbox" id="remember-me" name="remember_me"> Remember Me
                </label>
                <a href="#" class="forgot-password">Forgot Password?</a>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <p class="auth-switch">Don't have an account? <a href="register.html">Register here</a>.</p>
    </main>

    <?php include "./includes/footer.php" ?>
    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
        // For a real login, you'd submit this to a backend.
        // For demo, clicking login might just redirect to index or a "logged in" state.
    </script>
</body>

</html>