<?php
// Database connection
$servername = "localhost";
$username = "root@localhost";
$password = "";
$database = "test";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from the form
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Hash the password for security
//$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert user data into the database
$sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $username, $password, $email);

if ($stmt->execute()) {
    header("Location: login.html"); // Redirect to login page
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>