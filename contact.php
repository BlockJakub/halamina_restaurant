<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Halamina - Contact Us</title>
</head>

<body>
    <?php include "./includes/header.php" ?>

    <main class="main page-main-content">
        <h1>Contact Us</h1>
        <p>Have a question, feedback, or a special inquiry? Get in touch!</p>

        <div class="contact-info">
            <h2>Our Details</h2>
            <p><strong>Address:</strong> 123 Foodie Lane, Gourmet City, GC 45XY</p>
            <p><strong>Phone:</strong> <a href="tel:+440123456789">+44 (0)123 456 789</a></p>
            <p><strong>Email:</strong> <a href="mailto:jjcodenet@gmail.com">jjcodenet@gmail.com</a></p>
            <p><strong>Opening Hours:</strong> Mon-Sat: 5 PM - 11 PM, Sun: Closed</p>
        </div>

        <hr class="separator">

        <h2>Send Us a Message</h2>
        <form action="#" method="POST" class="site-form">
            <div class="form-group">
                <label for="contact-name">Full Name:</label>
                <input type="text" id="contact-name" name="contact_name" required>
            </div>
            <div class="form-group">
                <label for="contact-email">Email:</label>
                <input type="email" id="contact-email" name="contact_email" required>
            </div>
            <div class="form-group">
                <label for="contact-subject">Subject:</label>
                <input type="text" id="contact-subject" name="contact_subject" required>
            </div>
            <div class="form-group">
                <label for="contact-message">Message:</label>
                <textarea id="contact-message" name="contact_message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
        <div id="contact-confirmation" class="form-confirmation"
            style="display:none; margin-top: 20px; padding: 15px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 4px;">
            Thank you for your message! We'll get back to you as soon as possible.
        </div>

        <hr class="separator">

        <h2>Find Us</h2>
        <div class="map-container">
            <!-- Replace with your actual Google Maps embed code -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.315010920101!2d-0.1277582842299006!3d51.50735097963502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604ce3da02805%3A0x420343717a539107!2sBig%20Ben!5e0!3m2!1sen!2suk!4v1678886120123!5m2!1sen!2suk"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </main>

    <?php include "./includes/footer.php" ?>
    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
        // Basic confirmation message display for demo
        const contactForm = document.querySelector('.site-form'); // Be more specific if multiple forms on one page
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault(); // Prevent actual submission for this demo
                const confirmationDiv = document.getElementById('contact-confirmation');
                if (confirmationDiv) confirmationDiv.style.display = 'block';
                contactForm.style.display = 'none'; // Optionally hide form
            });
        }
    </script>
</body>

</html>