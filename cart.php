<?php
session_start();

// Connect to the database using PDO
$host = "localhost";
$username = "root";
$password = "";
$dbname = "regal_store";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Error connecting to the database: " . $e->getMessage());
}

if(isset($_GET['action']) && $_GET['action'] == 'add' && isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $quantity = $_POST['quantity'];

    // Get the product details from the database
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = :product_id");
    $stmt->bindParam(":product_id", $product_id);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    // Calculate the total price for the quantity of the product
    $price = $product['price'] * $quantity;

    // Add the product to the cart session variable
    if(isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]['quantity'] += $quantity;
    } else {
        $_SESSION['cart'][$product_id] = array(
            "quantity" => $quantity,
            "price" => $price
        );
    }

    // Add the product to the cart table in the database
    $user_id = $_SESSION['user_id'];
    $stmt = $pdo->prepare("INSERT INTO cart (user_id, product_id, quantity, price) VALUES (:user_id, :product_id, :quantity, :price)");
    $stmt->bindParam(":user_id", $user_id);
    $stmt->bindParam(":product_id", $product_id);
    $stmt->bindParam(":quantity", $quantity);
    $stmt->bindParam(":price", $price);
    $stmt->execute();
}

header("Location: product.php?id=" . $product_id);
exit();
?>
