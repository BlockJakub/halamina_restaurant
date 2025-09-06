    <footer>
        <div class="footer-container">
            <div class="footer-info">
                <p class="copyright">© <span id="currentYear"></span> Halamina. All Rights Reserved.</p>
                <p class="thanks">Thank you for dining with us!</p>
            </div>
            <nav class="footer-links">
                <ul>
                    <!-- Update these links as needed -->
                    <li><a href="<?php echo BASE_URL; ?>menu.php">Menu</a></li>
                    <li><a href="<?php echo BASE_URL; ?>book-table.php">Reservations</a></li>
                    <li><a href="<?php echo BASE_URL; ?>contact.php">Contact Us</a></li>
                    <li><a href="<?php echo BASE_URL; ?>privacy-policy.php">Privacy Policy</a></li>
                </ul>
            </nav>
        </div>
    </footer>
    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
        // Add any other site-wide JS here
    </script>
    <!-- Add page-specific JS file includes here if needed -->
    <?php if (isset($include_delivery_js) && $include_delivery_js): ?>
        <!-- <script src="<?php echo BASE_URL; ?>js/delivery.js"></script> -->
    <?php endif; ?>
    </body>

    </html>