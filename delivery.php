<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Halamina - Order Delivery</title>
</head>

<body>
    <?php include "./includes/header.php" ?>

    <main class="main page-main-content">
        <h1>Order for Delivery or Pickup</h1>
        <p>Get your Halamina favorites delivered to your door or ready for pickup!</p>

        <form action="#" method="POST" class="site-form">
            <fieldset>
                <legend>Your Details</legend>
                <div class="form-group">
                    <label for="delivery-name">Full Name:</label>
                    <input type="text" id="delivery-name" name="delivery_name" required>
                </div>
                <div class="form-group">
                    <label for="delivery-email">Email:</label>
                    <input type="email" id="delivery-email" name="delivery_email" required>
                </div>
                <div class="form-group">
                    <label for="delivery-phone">Phone Number:</label>
                    <input type="tel" id="delivery-phone" name="delivery_phone" required>
                </div>
            </fieldset>

            <fieldset>
                <legend>Order Type</legend>
                <div class="form-group">
                    <input type="radio" id="order-delivery" name="order_type" value="delivery" checked>
                    <label for="order-delivery" class="inline-label">Delivery</label>
                    <input type="radio" id="order-pickup" name="order_type" value="pickup">
                    <label for="order-pickup" class="inline-label">Pickup</label>
                </div>
                <div class="form-group" id="delivery-address-group">
                    <label for="delivery-address">Delivery Address:</label>
                    <textarea id="delivery-address" name="delivery_address" rows="3" required></textarea>
                </div>
            </fieldset>

            <fieldset>
                <legend>Your Order</legend>
                <p>Select your items. For now, please list your desired items and quantities below. (Full menu
                    integration coming soon!)</p>

                <!-- Example of how you might list a few popular items -->
                <div class="form-group menu-item-selection">
                    <label for="item-burger">Burger (£7.85):</label>
                    <input type="number" id="item-burger" name="item_burger_qty" min="0" value="0" class="qty-input">
                </div>
                <div class="form-group menu-item-selection">
                    <label for="item-langosh">Langosh (£7.15):</label>
                    <input type="number" id="item-langosh" name="item_langosh_qty" min="0" value="0" class="qty-input">
                </div>
                <div class="form-group menu-item-selection">
                    <label for="item-bread">Bread (£7.35):</label>
                    <input type="number" id="item-bread" name="item_bread_qty" min="0" value="0" class="qty-input">
                </div>
                <div class="form-group">
                    <label for="order-details">Other Items / Special Instructions:</label>
                    <textarea id="order-details" name="order_details" rows="4"
                        placeholder="e.g., 1x Fish Rice, no onions on burger..."></textarea>
                </div>
            </fieldset>

            <fieldset>
                <legend>Payment (Placeholder)</legend>
                <p>Online payment processing coming soon! For now, we will confirm your order and payment details over
                    the phone.</p>
                <div class="form-group">
                    <input type="checkbox" id="agree-terms" name="agree_terms" required>
                    <label for="agree-terms" class="inline-label">I agree to the terms and conditions
                        (placeholder).</label>
                </div>
            </fieldset>

            <button type="submit" class="btn btn-primary">Place Order</button>
        </form>
        <div id="delivery-confirmation" class="form-confirmation"
            style="display:none; margin-top: 20px; padding: 15px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 4px;">
            Thank you for your order! We will call you shortly to confirm details and payment.
        </div>
    </main>

    <?php include "./includes/footer.php" ?>
    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
        // Toggle delivery address field
        const orderTypeRadios = document.querySelectorAll('input[name="order_type"]');
        const deliveryAddressGroup = document.getElementById('delivery-address-group');
        const deliveryAddressTextarea = document.getElementById('delivery-address');

        orderTypeRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                if (this.value === 'delivery') {
                    deliveryAddressGroup.style.display = 'block';
                    deliveryAddressTextarea.required = true;
                } else {
                    deliveryAddressGroup.style.display = 'none';
                    deliveryAddressTextarea.required = false;
                }
            });
        });
        // Basic confirmation message display for demo
        const deliveryForm = document.querySelector('.site-form');
        if (deliveryForm) {
            deliveryForm.addEventListener('submit', function(e) {
                e.preventDefault(); // Prevent actual submission for this demo
                const confirmationDiv = document.getElementById('delivery-confirmation');
                if (confirmationDiv) confirmationDiv.style.display = 'block';
                deliveryForm.style.display = 'none'; // Optionally hide form
            });
        }
    </script>
</body>

</html>