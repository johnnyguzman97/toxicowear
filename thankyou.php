<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - ToxicWear</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <nav>
        <div class="logo">
            <a href="index.php">
                <img src="logo.png" alt="ToxicWear Logo" width="100px">
            </a>
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

<section class="thank-you-container">
    <h1>Thank You!</h1>
    <p><?php echo isset($_SESSION['success_message']) ? $_SESSION['success_message'] : "We appreciate your purchase!"; ?></p>
</section>

<footer>
    <div class="footer-container">
        <p>&copy; 2024 ToxicWear. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
