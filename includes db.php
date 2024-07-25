<?php
$host = 'localhost';  // Database host
$dbname = 'shopping_portal'; // Database name
$username = 'root';   // Database username
$password = '';       // Database password

// Establish database connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
