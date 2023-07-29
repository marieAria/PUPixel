<?php
require_once 'dbconfig.php';

// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare and execute the SQL query to check if the user account exists and verify password
$stmt = $conn->prepare('SELECT * FROM tbl_userinformation WHERE email = ?');

$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows === 1) {
    // User account found, verify password
    $row = $result->fetch_assoc();
    if($password==$row['password']){
        session_start();

        // Password is correct, get the value of the 'savedImages' column
        $savedImages = $row['savedImages'];
        $userID = $row['userID'];
        $firstname = $row['firstname'];
        
        $_SESSION['savedImages'] = $savedImages;
        $_SESSION['userID'] = $userID;
        $_SESSION['firstname'] = $firstname;
        // Now you can use the $savedImages variable as needed.
        echo '<script src="homeScript.js" data-saved-images="' . htmlspecialchars($savedImages, ENT_QUOTES, 'UTF-8') . '"></script>';

        // Redirect to home page or process the login based on your requirements
        header('Location: home.php');
        exit();
    } else {
        // Invalid password
        echo '<script>alert("Invalid password. Please try again.");</script>';
    }
} else {
    // User account not found or other errors
    echo '<script>alert("Invalid email or password. Please try again."); window.location.href = "loginform.php";</script>';
}

$stmt->close();
$conn->close();
?>
