<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Halamina - Book a Table</title>
</head>

<body>
    <?php include "./includes/header.php" ?>

    <main class="main page-main-content">
        <h1>Book Your Table</h1>
        <p>We'd love to host you! Please fill out the form below to request a booking. We will contact you to confirm
            your reservation.</p>

        <form action="#" method="POST" class="site-form">
            <div class="form-group">
                <label for="booking-name">Full Name:</label>
                <input type="text" id="booking-name" name="booking_name" required>
            </div>

            <div class="form-group">
                <label for="booking-email">Email:</label>
                <input type="email" id="booking-email" name="booking_email" required>
            </div>

            <div class="form-group">
                <label for="booking-phone">Phone Number:</label>
                <input type="tel" id="booking-phone" name="booking_phone" required>
            </div>

            <div class="form-group">
                <label for="booking-date">Date:</label>
                <input type="date" id="booking-date" name="booking_date" required>
            </div>

            <div class="form-group">
                <label for="booking-time">Time:</label>
                <select id="booking-time" name="booking_time" required>
                    <option value="">Select a time</option>
                    <option value="17:00">5:00 PM</option>
                    <option value="17:30">5:30 PM</option>
                    <option value="18:00">6:00 PM</option>
                    <option value="18:30">6:30 PM</option>
                    <option value="19:00">7:00 PM</option>
                    <option value="19:30">7:30 PM</option>
                    <option value="20:00">8:00 PM</option>
                    <option value="20:30">8:30 PM</option>
                    <option value="21:00">9:00 PM</option>
                </select>
            </div>

            <div class="form-group">
                <label for="booking-guests">Number of Guests:</label>
                <input type="number" id="booking-guests" name="booking_guests" min="1" max="10" value="2" required>
                <small>For parties larger than 10, please <a href="contact.html">contact us</a> directly.</small>
            </div>

            <div class="form-group">
                <label for="booking-requests">Special Requests (optional):</label>
                <textarea id="booking-requests" name="booking_requests" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Request Booking</button>
        </form>
        <div id="booking-confirmation" class="form-confirmation"
            style="display:none; margin-top: 20px; padding: 15px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 4px;">
            Thank you for your booking request! We will contact you shortly to confirm.
        </div>
    </main>

    <?php include "./includes/footer.php" ?>
    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
        // Basic confirmation message display for demo
        const bookingForm = document.querySelector('.site-form');
        if (bookingForm) {
            bookingForm.addEventListener('submit', function(e) {
                e.preventDefault(); // Prevent actual submission for this demo
                const confirmationDiv = document.getElementById('booking-confirmation');
                if (confirmationDiv) confirmationDiv.style.display = 'block';
                bookingForm.style.display = 'none'; // Optionally hide form
            });
        }
    </script>
</body>

</html>