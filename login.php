<?php
// Include the database connection configuration
include 'db.php';

// Handle user login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $query);

    // if the credentials are "admin" and "pass" it redirects to the admin panel. no sql check with database
    if ($username == "admin" && $password == "pass"){
        header("Location: admin.html");
        exit();
    }

    if (mysqli_num_rows($result) == 1) {
        // Set a cookie upon successful login
        setcookie("username", $username, time() + (86400 * 30), "/"); // Cookie valid for 30 days

        // Redirect to index.html on successful login
        header("Location: index.php");
        exit();
    } else {
        // Redirect to login.html if login is not successful
        header("Location: login.html");
        exit();
    }
}
?>
