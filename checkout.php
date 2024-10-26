<?php
session_start();

// Example cart array (replace with session data if available)
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [
        [
            'name' => 'Sample Product',
            'price' => 20.00,
            'quantity' => 1,
            'id' => 1 // ID for identifying the product
        ]
    ];
}

// Handle Quantity Update and Item Removal
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Update Quantity
    if (isset($_POST['update_quantity'])) {
        $index = $_POST['index'];
        $quantity = (int)$_POST['quantity'];
        
        if (isset($_SESSION['cart'][$index]) && $quantity > 0) {
            $_SESSION['cart'][$index]['quantity'] = $quantity;
        }
    }

    // Remove Item
    if (isset($_POST['remove_item'])) {
        $index = $_POST['index'];

        if (isset($_SESSION['cart'][$index])) {
            unset($_SESSION['cart'][$index]);
            $_SESSION['cart'] = array_values($_SESSION['cart']); // Re-index array
        }
    }
}

// Calculate total
$total = 0;
foreach ($_SESSION['cart'] as $item) {
    $total += $item['price'] * $item['quantity'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - ToxicWear</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navbar -->
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

<!-- Checkout Page -->
<section class="checkout-container">
    <div class="checkout-header">
        <h1>Checkout</h1>
    </div>

    <div class="order-summary">
        <h2>Order Summary</h2>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['cart'] as $index => $item): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item['name']); ?></td>
                        <td><?php echo "$" . number_format($item['price'], 2); ?></td>
                        <td>
                            <!-- Quantity adjustment form -->
                            <form method="POST" action="checkout.php">
                                <input type="hidden" name="index" value="<?php echo $index; ?>">
                                <input type="number" name="quantity" value="<?php echo $item['quantity']; ?>" min="1" style="width: 50px;">
                                <button type="submit" name="update_quantity">Update</button>
                            </form>
                        </td>
                        <td><?php echo "$" . number_format($item['price'] * $item['quantity'], 2); ?></td>
                        <td>
                            <!-- Remove button -->
                            <form method="POST" action="checkout.php">
                                <input type="hidden" name="index" value="<?php echo $index; ?>">
                                <button type="submit" name="remove_item">Remove</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">Total:</td>
                    <td><?php echo "$" . number_format($total, 2); ?></td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>

    <form action="process_order.php" method="POST" class="checkout-form">
        <!-- Shipping Information -->
        <div class="shipping-info">
            <h2>Shipping Information</h2>
            <label>Full Name:</label>
            <input type="text" name="full_name" required>
            <label>Address:</label>
            <input type="text" name="address" required>
            <label>City:</label>
            <input type="text" name="city" required>
            <label>State:</label>
            <input type="text" name="state" required>
            <label>Zip Code:</label>
            <input type="text" name="zip_code" required>
        </div>

        <!-- Payment Information -->
        <div class="payment-info">
            <h2>Payment Information</h2>
            <label>Name on Card:</label>
            <input type="text" name="card_name" required>
            <label>Card Number:</label>
            <input type="text" name="card_number" required>
            <label>Expiry Date:</label>
            <input type="text" name="expiry_date" placeholder="MM/YY" required>
            <label>CVV:</label>
            <input type="text" name="cvv" required>
        </div>

        <button type="submit" class="btn place-order">Place Order</button>
    </form>
</section>

<!-- Footer -->
<footer>
    <div class="footer-container">
        <p>&copy; 2024 ToxicWear. All rights reserved.</p>
    </div>
</footer>

</body>
</html>


