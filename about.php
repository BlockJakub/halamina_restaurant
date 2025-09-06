<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Halamina - About Us</title> <!-- CHANGE THIS TITLE -->
    </head>

    <body>
        <?php include "./includes/header.php" ?>

        <main class="main page-main-content"> <!-- Added a class for specific page styling if needed -->
            <h1>About Us</h1> <!-- CHANGE THIS HEADING -->
            <p>Welcome to the Halamina About Us page. Here you will find information about our restaurant's history,
                mission, and team.</p>
            <p><em>(Replace this with your actual content for the About Us page.)</em></p>
            <!-- Add more content specific to this page -->
        </main>

        <?php include "./includes/footer.php" ?>

        <script>
            document.getElementById('currentYear').textContent = new Date().getFullYear();
        </script>
    </body>

</php>