<?php
$servername = "localhost";
$username = "root";  // Change if your DB has a different username
$password = "sathvika@2005";      // Change if your DB has a password
$database = "cm_database"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
