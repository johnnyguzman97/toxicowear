<?php
// Session check for account access
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account - ToxicWear</title>
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

<!-- ACCOUNT INFO -->
<section class="my-5 py-5">
    <div class="row container mx-auto">
        <div class="text-center mt-3 pt-5 col-lg-6 col-md-12 col-sm-12">
            <h3 class="font-weight-bold">Account Info</h3>
            <hr class="account-info">
            <p>Name<span>Roger</span></p>
            <p>Email<span>roger@gmail.com</span></p>
            <p><a href="#" id="order-btn">Your Orders</a></p>
            <p><a href="logout.php" id="logout-btn">Logout</a></p>
        </div>
    </div>

    <div class="col-lg-6 col-md-12 col-sm-12">
        <form id="account-form" action="change_password.php" method="POST">
            <h3>Change Password</h3>
            <hr class="mx-auto">
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" id="account-password" name="password" placeholder="Password" required>
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" id="account-password-confirm" name="confirm_password" placeholder="Confirm Password" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Change Password" class="btn" id="change-pass-btn">
            </div>
        </form>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="footer-container">
        <div class="footer-section contact-section">
            <img src="logo.png" alt="ToxicWear Logo" width="100px">
            <p>We provide the best products with high quality and affordable prices.</p>
        </div>
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
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 ToxicWear. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
