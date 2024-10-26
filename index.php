<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - ToxicWear</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navbar -->
    <header>
        <nav>
            <div class="logo">
                <img src="logo.png" alt="ToxicWear Logo" width="100px"> <!-- Add your logo image here -->
            </div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="cart.php"><img src="cart-icon.png" alt="Cart" width="30px"></a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
        <img src="backimg.png" alt="">
            <h1>New Arrivals</h1>
            <p>The Best Sale Of The Season</p>
            <a href="shop.php" class="btn">Shop Now</a>
        </div>
    </section>

    <!-- Three Sections (New Arrivals, Popular T-shirts, Men's Clothing) -->
    <main>
        <div class="section-container">
            <!-- New Arrivals Section -->
            <div class="section">
                <img src="f1.jpg" alt="New Arrivals">
                <div class="section-content">
                    <h2>New Arrivals</h2>
                    <a href="shop.php?category=new-arrivals" class="btn">Shop Now</a>
                </div>
            </div>

            <!-- Popular T-shirts Section -->
            <div class="section">
                <img src="f8.jpg" alt="Popular T-shirts">
                <div class="section-content">
                    <h2>Popular T-shirts</h2>
                    <a href="shop.php?category=popular-tshirts" class="btn">Shop Now</a>
                </div>
            </div>

            <!-- Men's Clothing Section -->
            <div class="section">
                <img src="f3.jpg" alt="Men's Clothing">
                <div class="section-content">
                    <h2>Men's Clothing</h2>
                    <a href="shop.php?category=mens-clothing" class="btn">Shop Now</a>
    
                </div>
            </div>
        </div>
    </main>

    <footer>
    <div class="footer-container">
        <!-- Contact Section -->
        <div class="footer-section contact-section">
            <img src="logo.png" alt="ToxicWear Logo" width="100px">
            <p>Address: 123 Lexington Road, Los Angeles</p>
            <p>Phone: 222-124-4235</p>
            <p>Hours: Mon-Fri, 10AM-5PM</p>
            <p>Follow us:</p>
            <ul class="social-icons">
                <li><a href="#"><img src="facebook-icon.png" alt="Facebook" width="20px"></a></li>
                <li><a href="#"><img src="instagram-icon.png" alt="Instagram" width="20px"></a></li>
                <li><a href="#"><img src="twitter-icon.png" alt="Twitter" width="20px"></a></li>
            </ul>
        </div>

        <!-- About Section -->
        <div class="footer-section">
            <h4>About</h4>
            <ul>
                <li><a href="about.php">About Us</a></li>
                <li><a href="#">Delivery Information</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>

        <!-- My Account Section -->
        <div class="footer-section">
            <h4>My Account</h4>
            <ul>
                <li><a href="#">Sign In</a></li>
                <li><a href="cart.php">View Cart</a></li>
                <li><a href="#">My Wishlist</a></li>
                <li><a href="#">Track My Order</a></li>
                <li><a href="#">Help</a></li>
            </ul>
        </div>

        <!-- Payment Methods -->
        <div class="footer-section">
            <h4>Secured Pay Gateway</h4>
            <img src="pay.png" alt="Payment Methods" width="150px"> <!-- Add your payment method icons here -->
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2024 Chicos Toxicos. All rights reserved.</p>
    </div>
</footer>

</body>
</html>



