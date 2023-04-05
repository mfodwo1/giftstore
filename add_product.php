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
    $product_code = $_POST['product_code'];
    $qty = $_POST['qty'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image1 = $_FILES['image1']['name'];
    

    // Move uploaded image files to a directory on the server
    // Move uploaded image files to a directory on the server
$target_dir = "img/";
$image_path1 = $target_dir . basename($image1);
move_uploaded_file($_FILES['image1']['tmp_name'], $image_path1);


// Insert product data into the database using prepared statements
$stmt = $conn->prepare("INSERT INTO products (product_code, pname, pdescription, price, qty, image1, image_path) VALUES (:product_code, :name, :description, :price, :qty, :image1, :image_path)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':price', $price);
$stmt->bindParam(':qty', $qty);
$stmt->bindParam(':image1', $image1);
$stmt->bindParam(':image_path', $image_path1);
$stmt->bindParam(':product_code', $product_code);
$stmt->execute();


    echo "<script>alert('Product added sucessfully ')</script>";
}
catch(PDOException $e) {
    echo "Error adding product: " . $e->getMessage();
}

// Close the database connection
$conn = null;
?>
