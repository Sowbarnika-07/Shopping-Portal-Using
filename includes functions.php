<?php
// Example functions for handling products and users

// Function to fetch all products from the database
function getProducts($pdo) {
    $stmt = $pdo->query("SELECT * FROM products");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Function to fetch a single product by ID
function getProductById($pdo, $id) {
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Function to add a product to the cart (session-based cart)
function addToCart($productId, $quantity) {
    session_start();
    $_SESSION['cart'][$productId] += $quantity;
}

// Function to get total items in the cart
function getTotalItemsInCart() {
    session_start();
    if (isset($_SESSION['cart'])) {
        return array_sum($_SESSION['cart']);
    }
    return 0;
}
?>
