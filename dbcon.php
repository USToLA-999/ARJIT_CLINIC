<?php
$servername = "localhost";
$username = "sunny1";
$password = "deadpool@123"; // Replace with your MySQL password
$database = "database1";
$port = "3308";

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    
}
?>
