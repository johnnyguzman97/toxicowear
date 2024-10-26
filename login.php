<?php
// Start session to handle login
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ToxicWear</title>
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

<!-- LOGIN FORM -->
<section class="my-5 py-5">
  <div class="container text-center mt-3 pt-5">
    <h2 class="form-weight-bold">Log In</h2>
    <hr class="mx-auto">
  </div>
  <div class="mx-auto container">
    <form id="login-form" action="login_process.php" method="POST">
      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" id="login-email" name="email" placeholder="Email" required>
      </div>

      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" id="login-password" name="password" placeholder="password" required>
      </div>

      <div class="form-group">
        <input type="submit" class="btn" id="login-btn" value="Login">
      </div>

      <div class="form-group">
        <a href="register.php" class="btn">Don't have an account? Register</a>
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
