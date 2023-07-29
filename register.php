<?php
require_once 'dbconfig.php';

// Retrieve form data
$firstname = $_POST['firstname'];
$surname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare and execute the SQL query to insert the user into the database
$stmt = $conn->prepare('INSERT INTO tbl_userinformation (firstname, lastname, email, password) VALUES (?, ?, ?, ?)');
$stmt->bind_param('ssss', $firstname, $surname, $email, $password);

if ($stmt->execute()) {
    // Registration successful
    echo '<script>alert("Registration successful. Please login."); window.location.href = "loginform.php";</script>';
} else {
    // Registration failed
    echo '<script>alert("Registration failed. Please try again."); window.location.href = "joinus.php";</script>';
}

$stmt->close();
$conn->close();
?>
