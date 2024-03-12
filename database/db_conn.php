<?php

// Database Connection

$host = 'localhost';
$db = 'burnout';
$user = 'root';
$pass = '';

// Establish a connection
$conn = new mysqli($host, $user, $pass, $db);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// echo "Connected successfully";

// Get table 'burnout' data
// $sql = "SELECT * FROM burnout";
// $result = $conn->query($sql);

// // Close the connection
// $conn->close();

// Set table burnout mail data
// $sql = "INSERT INTO burnout (email, name, message) VALUES ('
// $email', '$name', '$message')";
// $result = $conn->query($sql);