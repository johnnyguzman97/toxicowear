<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - ToxicWear</title>
    <link rel="stylesheet" href="style.css"> <!-- Corrected path -->
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
    <header>
        <h1>Shop Our Collection</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="cart.php">Cart</a></li>
            </ul>
        </nav>
    </header>
    <main>
    <h2>Products</h2>
    <div class="product-grid">
    <div class="product-item">
        <img src="f1.jpg" alt="Product 1">
        <h3>Thank God for Toxicas</h3>
        <p>$25.00</p>
        <a href="product.php?product_id=1" class="btn">View Details</a>
    </div>

    <div class="product-item">
        <img src="f2.jpg" alt="Product 2">
        <h3>Got Honey?</h3>
        <p>$22.00</p>
        <a href="product.php?product_id=2" class="btn">View Details</a>
    </div>

    <div class="product-item">
        <img src="f8.jpg" alt="Product 3">
        <h3>SadBoyz Club</h3>
        <p>$30.00</p>
        <a href="product.php?product_id=3" class="btn">View Details</a>
    </div>
</div>

        <a href="index.php" class="btn">Go Back Home</a>
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

