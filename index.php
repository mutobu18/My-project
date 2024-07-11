<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Maria House Ltd! Having you is such a blessing.</title>
    <link rel="stylesheet" href="Css files/ind.css">

</head>
<body>
    <?php include  'header.php';?>
    
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
                <button class="signup-button">Sign Up</button>
                
        </nav>
        <h1>Welcome to Maria House Ltd!  Having you   is such a blessing.</h1>
    </header>
    <div class="image-container">
        <img src="Images/img1.src.jpg" altr="maria house image" style="max-width: 100%; max-height: 300px; height: auto;"; >
        <img src="Images/img15.src.jpg" altr="maria house image" style="max-width: 100%; max-height: 300px; height: auto;"; >
        
        <img src="Images/img4.src.jpg" altr="maria house image" style="max-width: 100%; max-height: 300px; height: auto;"; >
        
    
</div>
ca
    <p>Maria House Ltd is a company located in Bunia, Democratic Republic of Congo. We specialize in selling high-quality clothes and bags at affordable prices. Our company has been serving customers since 2010, building a strong reputation for reliability and customer satisfaction.</p>

    <p>Founded by Mrs. Maria, our company is committed to providing our customers with the latest fashion trends and durable products. We source our merchandise from trusted suppliers, ensuring that each item meets our standards of quality and style.</p>
    
    <p>At Maria House Ltd, we believe in delivering excellent customer service and creating a positive shopping experience for everyone who walks through our doors. Whether you're looking for casual wear, formal attire, or stylish accessories, we have something for everyone.</p>
    
    <p>Additionally, we are proud to be actively involved in our local community, supporting various initiatives and charities that make a positive impact. We strive to be more than just a business; we aim to be a valued member of the community.</p>
    </p><br><br>

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
</body>