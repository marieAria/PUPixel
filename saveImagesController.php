<?php
// saveImagesController.php

require_once 'dbconfig.php';
session_start();

// Check if the user is logged in and retrieve the first name from the session
if (isset($_SESSION['firstname'])) {
    $firstname = $_SESSION['firstname'];
} else {
    // Redirect the user to the login page if not logged in
    header("Location: loginform.php");
    exit();
}

$userID = $_SESSION['userID'];
$stmt = $conn->prepare("SELECT savedImages FROM tbl_userinformation WHERE userID = ?");
$stmt->bind_param("i", $userID);
$stmt->execute();
$stmt->bind_result($savedImages);
$stmt->fetch();
$stmt->close();

// Convert the comma-separated string to an array
$imageArray = explode(',', $savedImages);

// Encode the array as JSON and return it as the response
echo json_encode($imageArray);
?>
