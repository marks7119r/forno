<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ResOwner = $_POST['ResOwner'];
    $conn = mysqli_connect("localhost", "omar", "omar", "forno");

    if($ResOwner == ''){
            // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT id, ResOwner, tableNo FROM reservations";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Search Results</h2>";
        echo "<table><tr><th>ID</th><th>ResOwner</th><th>Table Number</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["ResOwner"] . "</td><td>" . $row["tableNo"] . "</td></tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No result</p>";
    }

    } else {
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    
        $sql = "SELECT id, ResOwner, tableNo FROM reservations WHERE ResOwner='$ResOwner'";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            echo "<h2>Search Results</h2>";
            echo "<table><tr><th>ID</th><th>ResOwner</th><th>Table Number</th></tr>";
    
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["ResOwner"] . "</td><td>" . $row["tableNo"] . "</td></tr>";
            }
    
            echo "</table>";
        } else {
            echo "<p>No result</p>";
        }
    }

    $conn->close();
}
?>
