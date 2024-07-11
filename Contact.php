<?php 
include 'db_connect.php';
include 'insert_message.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Maria House Ltd</title>
    <link rel="stylesheet" href="Css files/contact.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php" class="html">Home</a></li>
                <li><a href="about.php" class="html">About</a></li>
                <li><a href="products.php" class="html">Products</a></li>
                <li><a href="prices.php" class="html">Prices</a></li>
                <li><a href="contact.php" class="html">Contact</a></li>
                <li><a href="services.php" class="html">Services</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Contact Us</h1>

        <form id="contactForm" action="#" method="post" onsubmit="return validateForm()">
            <label for="name">Name</label><br>
            <input type="text" id="name" name="name" placeholder="Your name" required><br>

            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" placeholder="Your email" required><br>

            <label for="message">Message</label><br>
            <textarea id="message" name="message" rows="5" placeholder="Write your message here" required></textarea><br>

            <button type="submit">Send Message</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2024 Maria House Ltd. All rights reserved.</p>
    </footer>

    <script>
        function validateForm() {
            var name = document.getElementById('name').value.trim();
            var email = document.getElementById('email').value.trim();
            var message = document.getElementById('message').value.trim();

            if (name === '' || email === '' || message === '') {
                alert('Please fill in all fields.');
                return false;
            }

            return true;
        }
    </script>
</body>
</html>