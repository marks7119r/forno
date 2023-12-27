<?php
// Include the database connection configuration
include 'db.php';

// Handle user signup
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        // Check if the username already exists
        $checkQuery = "SELECT * FROM users WHERE username='$username'";
        $checkResult = mysqli_query($con, $checkQuery);

        if (mysqli_num_rows($checkResult) > 0) {
            echo json_encode(array('status' => 'error', 'message' => 'Username already exists.'));
            exit();
        }

        // Insert the new user into the database
        $insertQuery = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

        if (mysqli_query($con, $insertQuery)) {
            echo json_encode(array('status' => 'success', 'message' => 'Successfully Registered.'));
            exit();
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Error: ' . mysqli_error($con)));
            exit();
        }
    } else {
        echo json_encode(array('status' => 'error', 'message' => 'Enter valid username and password.'));
        exit();
    }
}
?>
