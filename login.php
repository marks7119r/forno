<?php
// Include the database connection configuration
include 'db.php';

// Handle user login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        // Redirect to index.html on successful login
        header("Location: index.html");
        exit();
    } else {
        // Redirect to login.html if login is not successful
        header("Location: login.html");
        exit();
    }
}
?>
<?php
    // Start the session to access session variables
    session_start();

    // Check if the user is logged in
    if (isset($_SESSION['username'])) {
        // User is logged in, display a welcome message or other content
        echo '<p>Welcome, ' . $_SESSION['username'] . '!</p>';
    } else {
        // User is not logged in, display signup button
        echo '<button id="signupButton">Sign Up</button>';
    }
    ?>