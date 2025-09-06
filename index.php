<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Halamina</title>
</head>

<body>
    <?php include __DIR__ . '/includes/header.php'; ?>

    <!--  =============    MAIN   ==============  -->
    <main class="main">
        <div class="bento-grid">
            <div class="bento-item">
                <img src="img/burger_zebrik.jpg" alt="burger" class="item__img">
                <h3 class="item__title">Burger</h3>
                <p class="item__sub">Beef, cheese, burger salad, sauce</p>
                <h3 class="item__title-price">£7.85</h3>
            </div>
            <div class="bento-item">
                <img src="img/langosh_finale.png" alt="langosh" class="item__img">
                <h3 class="item__title">Langosh</h3>
                <p class="item__sub">Mushrooms, cheese, langosh salad, sauce</p>
                <h3 class="item__title-price">£7.15</h3>
            </div>
            <div class="bento-item">
                <img src="img/chleb.jpg" alt="bread" class="item__img">
                <h3 class="item__title">Bread</h3>
                <p class="item__sub">Home made bread, cheese, bread salad, egg, sauce</p>
                <h3 class="item__title-price">£7.35</h3>
            </div>
            <div class="bento-item">
                <img src="img/fishrice_finale.png" alt="fish rice" class="item__img">
                <h3 class="item__title">Fish Rice</h3>
                <p class="item__sub">Beef, cheese, burger salad, sauce</p>
                <h3 class="item__title-price">£12.25</h3>
            </div>
            <div class="bento-item">
                <img src="img/langosh_finale.png" alt="langosh" class="item__img">
                <h3 class="item__title">Langosh</h3>
                <p class="item__sub">Beef, cheese, burger salad, sauce</p>
                <h3 class="item__title-price">£7</h3>
            </div>
            <div class="bento-item">
                <img src="img/20250304_132827.jpg" alt="burger" class="item__img">
                <h3 class="item__title">Burger</h3>
                <p class="item__sub">Beef, cheese, burger salad, sauce</p>
                <h3 class="item__title-price">£7</h3>
            </div>
        </div>
    </main>


    <!--   ============  FOOTER ===============  -->
    <?php include __DIR__ . '/includes/footer.php'; ?>

    <script>
        // Dynamically set the current year for the copyright
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>
</body>

</html>
</body>

</html>