<?php
session_start();
include 'includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];
    $quantity = (int)$_POST['quantity'];
    addToCart($productId, $quantity);
}

$totalItems = getTotalItemsInCart();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
</head>
<body>
    <h1>Shopping Cart</h1>
    <p>Total Items: <?php echo $totalItems; ?></p>
    <a href="index.php">Continue Shopping</a>
</body>
</html>
