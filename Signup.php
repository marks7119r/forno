<?php
// Include the database connection configuration
include 'db.php';

// Handle user signup
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

        if (mysqli_query($con, $query)) {
            echo "<script type='text/javascript'> alert('Successfully Registered')</script>";
        } else {
            echo "<script type='text/javascript'> alert('Error: " . mysqli_error($con) . "')</script>";
        }
    } else {
        echo "<script type='text/javascript'> alert('Enter Valid username and password')</script>";
    }
}
?>
