<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Halamina - Logged Out</title>
</head>

<body>
    <?php include "./includes/header.php" ?>

    <main class="main page-main-content auth-page">
        <h1>You Have Been Logged Out</h1>
        <p>Thank you for visiting Halamina. We hope to see you again soon!</p>
        <div class="logout-options">
            <a href="login.php" class="btn btn-secondary">Login Again</a>
            <a href="index.php" class="btn btn-primary">Back to Homepage</a>
        </div>
    </main>

    <?php include "./includes/footer.php" ?>
    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
        // In a real application, accessing this page might trigger a backend logout action
        // and then display this confirmation.
    </script>
</body>

</html>