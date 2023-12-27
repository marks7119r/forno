<?php
// Include the database connection configuration
include 'db.php';

// Handle user signup
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username and password are not empty
    if (!empty($username) && !empty($password)) {
        // Use prepared statement to avoid SQL injection
        $query = "INSERT INTO users (username, password) VALUES (?, ?)";

        // Create a prepared statement
        $stmt = $con->prepare($query);

        // Bind parameters
        $stmt->bind_param("ss", $username, $password);

        // Execute the statement
        $stmt->execute();

        // Check if the query was successful
        if ($stmt->affected_rows > 0) {
            echo "<script type='text/javascript'> alert('Successfully Registered')</script>";
        } else {
            echo "<script type='text/javascript'> alert('Registration failed')</script>";
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "<script type='text/javascript'> alert('Enter valid username and password')</script>";
    }
}
?>
