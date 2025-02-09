<?php
header("Content-Type: application/json");

// Database connection
$conn = new mysqli("localhost", "root", "", "cm_database");

// Check connection
if ($conn->connect_error) {
    die(json_encode(["success" => false, "message" => "Database connection failed!"]));
}

// Get JSON input
$data = json_decode(file_get_contents("php://input"), true);
$email = $data['email'];
$password = $data['password'];

// Secure query using prepared statements
$stmt = $conn->prepare("SELECT * FROM students WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $student = $result->fetch_assoc();
    echo json_encode(["success" => true, "student" => $student]);
} else {
    echo json_encode(["success" => false, "message" => "Incorrect email or password"]);
}

$stmt->close();
$conn->close();
?>
