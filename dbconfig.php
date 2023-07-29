<?php
// Database configuration
$hostname = 'localhost'; // Assuming MySQL is running on the same machine as XAMPP
$username = 'root'; // Default username for XAMPP
$password = ''; // Default password for XAMPP is empty
$database = 'db_pupixel'; // Replace with the name of your database

// Create a connection to the database
$conn = new mysqli($hostname, $username, $password, $database);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>
