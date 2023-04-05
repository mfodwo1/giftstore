<?php
session_start();
include("db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $sql = "SELECT id, fname, lname, hashed_password FROM users WHERE email = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();
  
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hashed_password = $row['hashed_password'];
    
    if (password_verify($password, $hashed_password)) {
      $_SESSION["loggedin"] = true;
      $_SESSION["id"] = $row["id"];
      $_SESSION["fname"] = $row["fname"];
      $_SESSION["lname"] = $row["lname"];
      
      header("location: index.php");
    } else {
      $error = "Invalid password.";
    }
  } else {
    $error = "No account found with that email.";
  }
}

include("login.php");
?>
