<?php
include 'includes/db.php';
include 'includes/functions.php';

// Fetch all products
$products = getProducts($pdo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Portal</title>
</head>
<body>
    <h1>Product Listing</h1>
    <ul>
        <?php foreach ($products as $product): ?>
        <li>
            <h2><?php echo $product['name']; ?></h2>
            <p>Price: $<?php echo $product['price']; ?></p>
            <a href="product.php?id=<?php echo $product['id']; ?>">View Details</a>
        </li>
        <?php endforeach; ?>
    </ul>
    <p><a href="cart.php">View Cart (<?php echo getTotalItemsInCart(); ?>)</a></p>
</body>
</html>
