<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $recordId = $_POST["id"];
    $resOwner = $_POST["name"];
    $tableNo = $_POST["tableNo"];

    // Perform database connection and update query
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

    // Update query
    $sql = "UPDATE reservations SET ResOwner='$resOwner', tableNo='$tableNo' WHERE id=$recordId";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
