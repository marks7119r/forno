<?php
// Include the database connection configuration
include 'db.php';

// Check if the "username" cookie is set
if (isset($_COOKIE["username"])) {
    // "username" cookie is set, echo the username
    $username = $_COOKIE["username"];
    echo json_encode(array('status' => 'success', 'message' => "Welcome back, $username!"));
} else {
    // "username" cookie is not set, show a message to sign up or log in
    echo json_encode(array('status' => 'error', 'message' => 'Please sign up or log in for reservations.'));
}
?>
