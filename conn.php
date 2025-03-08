<?php
$host = "localhost";
$dbname = "learn-sql";  // Make sure this is the correct database name
$username = "root";  // Default XAMPP username
$password = "";  // Default XAMPP password is empty

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Database connected successfully!<br>";
}
