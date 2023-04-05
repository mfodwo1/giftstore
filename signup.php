<?php
// Connect to the database using PDO
$host = "localhost";
$username = "root";
$password = "";
$dbname = "regal_store";
$options = array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, $options);
} catch(PDOException $e) {
  die("Error connecting to the database: " . $e->getMessage());
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the form data
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  // Check if the passwords match
  if ($password !== $confirm_password) {
    die("Error: Passwords do not match.");
  }

  // Hash the password
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // Insert the new user into the database
  $stmt = $pdo->prepare("INSERT INTO users (fname, lname, email, phone, hashed_password) VALUES (?, ?, ?, ?, ?)");
  $stmt->execute([$fname, $lname, $email, $phone, $hashed_password]);

  // Redirect to a confirmation page or the homepage
  header("Location: login.php");
  exit();
}
?>