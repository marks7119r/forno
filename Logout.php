<?php
// Logout script

// Check if the "username" cookie is set
if (isset($_COOKIE["username"])) {
    // Unset the "username" cookie
    setcookie("username", "", time() - 3600, "/"); // Expire the cookie

    // Redirect to the home page or login page after logout
    header("Location: Login.html");
    exit();
} else {
    // Redirect to the home page or login page if the cookie is not set
    header("Location: Login.html");
    exit();
}
?>
