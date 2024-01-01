<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $recordId = $_POST["id"];

    // Perform database connection and delete query
    $servername = "localhost";
    $username = "omar";
    $password = "omar";
    $dbname = "forno"; // Your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Delete query
    $sql = "DELETE FROM reservations WHERE id=$recordId";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
