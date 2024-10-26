<?php
// This file is your registration form
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - ToxicWear</title>
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

<!-- REGISTER FORM -->
<section class="my-5 py-5">
  <div class="container text-center mt-3 pt-5">
    <h2 class="form-weight-bold">Register</h2>
    <hr class="mx-auto">
  </div>
  <div class="mx-auto container">
    <!-- Form to post to register_process.php -->
    <form id="register-form" action="server/register_process.php" method="POST">
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" id="register-name" name="name" placeholder="Name" required>
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" id="register-email" name="email" placeholder="Email" required>
      </div>

      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" id="register-password" name="password" placeholder="Password" required>
      </div>

      <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" class="form-control" id="register-confirm-password" name="confirm_password" placeholder="Confirm Password" required>
      </div>

      <div class="form-group">
        <input type="submit" class="btn" id="register-btn" value="Register">
      </div>
    </form>

    <!-- Display error or success messages -->
    <?php if (isset($_SESSION['error'])): ?>
        <p style="color: red;"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
    <?php endif; ?>
    <?php if (isset($_SESSION['success'])): ?>
        <p style="color: green;"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></p>
    <?php endif; ?>
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
