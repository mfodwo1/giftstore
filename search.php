<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "regal_store");

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the search term from the search form
$searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);

// Query the database to search for products that match the search term
$sql = "SELECT * FROM products WHERE pname LIKE '%".$searchTerm."%' OR pdescription LIKE '%".$searchTerm."%'";
$result = mysqli_query($conn, $sql);

// Check if there are any matching products
if (mysqli_num_rows($result) > 0) {
    // Display the matching products
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div>";
        echo "<img src='".$row['image_path']."' alt='".$row['pname']."'>";
        echo "<h3>".$row['pname']."</h3>";
        echo "<p>".$row['pdescription']."</p>";
        echo "<p>Price: $".$row['price']."</p>";
        echo "</div>";
    }
} else {
    // Display a message if no matching products are found
    echo "No products found.";
}

// Close the database connection
mysqli_close($conn);
?>
