<?php
// Connect to the database using PDO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "regal_store";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get form data
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image1 = $_FILES['image1']['name'];
    $image2 = $_FILES['image2']['name'];
    $image3 = $_FILES['image3']['name'];

    // Move uploaded image files to a directory on the server
    $target_dir = "../images/";
    move_uploaded_file($_FILES['image1']['tmp_name'], $target_dir . basename($image1));
    move_uploaded_file($_FILES['image2']['tmp_name'], $target_dir . basename($image2));
    move_uploaded_file($_FILES['image3']['tmp_name'], $target_dir . basename($image3));

    // Insert product data into the database using prepared statements
    $stmt = $conn->prepare("INSERT INTO products (pname, pdescription, price, image1, image2, image3) VALUES (:name, :description, :price, :image1, :image2, :image3)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':image1', $image1);
    $stmt->bindParam(':image2', $image2);
    $stmt->bindParam(':image3', $image3);
    $stmt->execute();

    echo "Product added successfully.";
}
catch(PDOException $e) {
    echo "Error adding product: " . $e->getMessage();
}

// Close the database connection
$conn = null;
?>
