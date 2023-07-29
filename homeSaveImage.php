<?php
// homeSaveImage.php

// Check if the AJAX request contains the 'filename' parameter
if (isset($_GET['filename'])) {
  // Retrieve the filename from the AJAX request
  $filename = $_GET['filename'];

  // Perform any necessary data validation or sanitization on the $filename variable

  // Assuming you have a database connection established
  require_once 'dbconfig.php';

  // Get the existing 'savedImages' value for the user from the 'user_information' table
  session_start();
  $userID = $_SESSION['userID'];
  $stmt = $conn->prepare("SELECT savedImages FROM tbl_userinformation WHERE userID = ?");
  $stmt->bind_param("i", $userID);
  $stmt->execute();
  $stmt->bind_result($existingSavedImages);
  $stmt->fetch();
  $stmt->close();

  // Check if the filename already exists in the 'savedImages' value
  $imageArray = explode(',', $existingSavedImages);
  if (!in_array($filename, $imageArray)) {
    // Append the new filename to the existing 'savedImages'
    $updatedSavedImages = empty($existingSavedImages) ? $filename : $existingSavedImages . ',' . $filename;

    // Update the 'savedImages' column of the 'user_information' table with the new value
    $stmt = $conn->prepare("UPDATE tbl_userinformation SET savedImages = ? WHERE userID = ?");
    $stmt->bind_param("si", $updatedSavedImages, $userID);

    if ($stmt->execute()) {
      // Database update successful
      $response = array("status" => "success", "message" => "Image saved successfully", "userID" => $userID);
      echo json_encode($response);
    } else {
      // Database update failed
      $response = array("status" => "error", "message" => "Error updating image for the user");
      echo json_encode($response);
    }

    // Close the statement and the database connection
    $stmt->close();
    $conn->close();
  } else {
    // If the filename already exists in 'savedImages', return a response indicating that it is already saved
    $response = array("status" => "error", "message" => "Image already saved for the user");
    echo json_encode($response);
  }
} else {
  // Handle the case when the 'filename' parameter is not present in the AJAX request
  $response = array("status" => "error", "message" => "Filename parameter not found in the request");
  echo json_encode($response);
}
?>
