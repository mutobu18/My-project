<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Maria House Ltd! Having you is such a blessing.</title>
    <link rel="stylesheet" href="Css files/Abo.css">
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
            <h1>You want to know about Maria House !</h1>
            <p1>Here is some details about us.</p1>
            </header>
        
            <img src="Images/img10.src.jpg" altr="maria house image" style="max-width: 100%; max-height: 300px; height: auto;"; >
            
            
            <div class="column-container">
                <div class="column">
                    <p>We pride ourselves on delivering superior products and exceptional customer service. Our commitment to quality extends across our entire range, from innovative home solutions to eco-friendly technologies. At Maria House, we strive to exceed your expectations with every purchase, ensuring durability, functionality, and style in every product we offer.</p>
                    <p>As a company rooted in community values, we prioritize sustainability and ethical practices. Our partnerships with local artisans and eco-conscious manufacturers ensure that our products are not only beautiful but also environmentally responsible. Join us in our mission to create spaces that inspire and endure.</p>
                    <img src="Images/img16.src.jpg" altr="maria house image" style="max-width: 100%; max-height: 300px; height: auto;"; >
                    
                </div>
                <div class="column">
                    <img src="Images/img7.src.jpg" altr="maria house image" style="max-width: 100%; max-height: 300px; height: auto;"; >
                    <p>Discover our extensive collection of home essentials, including stylish furniture, state-of-the-art appliances, and customizable decor options. Whether you're furnishing a new home or upgrading your existing space, our expert team is here to assist you in finding the perfect solutions that match your lifestyle and preferences.</p>
                    <p>Explore our website to learn more about our diverse product offerings, customer testimonials, and the latest promotions. Thank you for choosing Maria House Ltd – where quality meets passion.</p>
                    <img src="Images/img15.src.jpg" altr="maria house image" style="max-width: 100%; max-height: 300px; height: auto;"; >
                </div>
            </div>
            <footer>
            <p>&copy; 2024 Maria House. All rights reserved.</p>

        </footer>

            <script>

            const images = document.querySelectorAll('.image-container img');

images.forEach(image => {
    image.addEventListener('mouseenter', function() {
        this.style.transform = 'scale(1.1)';
        this.style.transition = 'transform 0.3s ease-in-out';
    });

    image.addEventListener('mouseleave', function() {
        this.style.transform = 'scale(1)';
    });
});

</script>
        
    </body>
    </html>