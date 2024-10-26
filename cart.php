<?php
// Cart handling logic
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];
    $size = $_POST['size'];
    $_SESSION['cart'][] = ['product_id' => $product_id, 'size' => $size];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - ToxicWear</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navbar -->
<header>
    <nav>
        <div class="logo">
            <img src="logo.png" alt="ToxicWear Logo" width="100px">
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

<main>
    <h2>Items in Your Cart</h2>
    <div class="cart-container">
        <?php
        $product_details = [
            1 => ['name' => 'Thank God for Toxicas', 'price' => 25.00, 'image' => 'f1.jpg'],
            2 => ['name' => 'Got Honey?', 'price' => 22.00, 'image' => 'f2.jpg'],
            3 => ['name' => 'SadBoyz Club', 'price' => 30.00, 'image' => 'f8.jpg']
        ];
        $total = 0;
        foreach ($_SESSION['cart'] as $item) {
            $product = $product_details[$item['product_id']];
            echo '<div class="cart-item">';
            echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '" width="100px">';
            echo '<div>';
            echo '<p><strong>' . $product['name'] . '</strong></p>';
            echo '<p>Size: ' . $item['size'] . '</p>';
            echo '</div>';
            echo '<p>$' . number_format($product['price'], 2) . '</p>';
            echo '</div>';
            $total += $product['price'];
        }
        ?>
    </div>
    <h3>Total: $<?php echo number_format($total, 2); ?></h3>
    <a href="checkout.php" class="btn">Proceed to Checkout</a>
</main>

<!-- Footer -->
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
            <img src="pay.png" alt="Payment Methods" width="150px">
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2024 ToxicWear. All rights reserved.</p>
    </div>
</footer>

</body>
</html>

