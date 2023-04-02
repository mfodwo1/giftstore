<?php
// Generate a hash of the user's password
$password = "my_password";
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Store the hashed password in the database
store_in_database($hashed_password);

// Check if a user-entered password matches the stored hash
$user_entered_password = "my_password";
$stored_hashed_password = retrieve_from_database();

if (password_verify($user_entered_password, $stored_hashed_password)) {
    echo "Password matches!";
} else {
    echo "Password doesn't match.";
}

?>