<?php
// Fetch product details based on product_id
$product_id = $_GET['product_id'];
$product_details = [
    1 => ['name' => 'Thank God for Toxicas', 'price' => 25.00, 'description' => 'A bold statement T-shirt for those who know the value of toxic relationships!', 'image' => 'f1.jpg'],
    2 => ['name' => 'Got Honey?', 'price' => 22.00, 'description' => 'Winnie the Pooh inspired streetwear for the honey lovers.', 'image' => 'f2.jpg'],
    3 => ['name' => 'SadBoyz Club', 'price' => 30.00, 'description' => 'Exclusive club T-shirt for the SadBoyz members only.', 'image' => 'f8.jpg']
];
$product = $product_details[$product_id];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['name']; ?> - ToxicWear</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Main Product Image */
        .product-image img {
            width: 100%;
            max-width: 500px;
            height: auto;
        }

        /* Thumbnails */
        .thumbnails {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .thumbnails img {
            width: 100px;
            height: auto;
            margin-right: 10px;
            cursor: pointer;
            border: 1px solid #ddd;
            transition: border 0.3s;
        }

        .thumbnails img:hover {
            border: 2px solid #333;
        }

        .product-info {
            text-align: left;
        }

        .related-products {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
        }

        .related-products .product {
            width: 22%;
            text-align: center;
        }

        .related-products .product img {
            width: 100%;
            height: auto;
        }
    </style>
    <script>
        function changeImage(src) {
            document.getElementById("main-product-image").src = src;
        }
    </script>
</head>
<body>
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

    <main>
        <!-- Product Section -->
        <div class="product-container">
            <div class="product-image">
                <img id="main-product-image" src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
            </div>

            <!-- Thumbnails -->
            <div class="thumbnails">
                <img src="f1.jpg" alt="Thank God for Toxicas" onclick="changeImage('f1.jpg')">
                <img src="f2.jpg" alt="Got Honey?" onclick="changeImage('f2.jpg')">
                <img src="f8.jpg" alt="SadBoyz Club" onclick="changeImage('f8.jpg')">
            </div>

            <!-- Product Info -->
            <div class="product-info">
                <h2><?php echo $product['name']; ?></h2>
                <p>$<?php echo number_format($product['price'], 2); ?></p>
                <form action="cart.php" method="post">
                    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" id="quantity" min="1" value="1">
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
                <p><?php echo $product['description']; ?></p>
            </div>
        </div>

        <!-- Related Products -->
        <h3>Related Products</h3>
        <div class="related-products">
            <div class="product">
                <img src="f1.jpg" alt="Thank God for Toxicas">
                <p>Graphic T-shirt - $24.99</p>
                <a href="product.php?product_id=1" class="btn">Buy Now</a>
            </div>
            <div class="product">
                <img src="f2.jpg" alt="Got Honey?">
                <p>Got Honey? T-shirt - $22.00</p>
                <a href="product.php?product_id=2" class="btn">Buy Now</a>
            </div>
            <div class="product">
                <img src="f8.jpg" alt="SadBoyz Club">
                <p>SadBoyz Club - $30.00</p>
                <a href="product.php?product_id=3" class="btn">Buy Now</a>
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

