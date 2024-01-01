<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $recordId = $_POST["id"];
    $resOwner = $_POST["name"];
    $tableNo = $_POST["tableNo"];

    // Perform database connection and insert query
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

    // Insert query
    $sql = "INSERT INTO reservations (id, ResOwner, tableNo) VALUES ('$recordId', '$resOwner', '$tableNo')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error inserting record: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
