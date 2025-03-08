<?php
require "conn.php";

$username = "admin";
$password = "password123";  // Plaintext password

// Hash the password before storing it
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $hashed_password);

if ($stmt->execute()) {
    echo "User created successfully!";
} else {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();
