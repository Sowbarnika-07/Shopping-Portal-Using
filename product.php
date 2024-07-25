<?php
include 'includes/db.php';
include 'includes/functions.php';

// Get product details based on ID
if (isset($_GET['id'])) {
    $product = getProductById($pdo, $_GET['id']);
    if (!$product) {
        die("Product not found!");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $product['name']; ?></title>
</head>
<body>
    <h1><?php echo $product['name']; ?></h1>
    <p>Price: $<?php echo $product['price']; ?></p>
    <p>Description: <?php echo $product['description']; ?></p>
    <form action="cart.php" method="post">
        <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
        Quantity: <input type="number" name="quantity" value="1" min="1"><br>
        <input type="submit" value="Add to Cart">
    </form>
</body>
</html>
