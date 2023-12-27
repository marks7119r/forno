<?php
// Include the database connection configuration
include 'db.php';

// Handle user login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        echo "<script type='text/javascript'> alert('Login successful')</script>";
    } else {
        echo "<script type='text/javascript'> alert('Invalid username or password')</script>";
    }
}
?>
