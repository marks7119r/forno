<?php
// Database configuration
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$host = "localhost";
$username = "marks";
$password = "marks";
$database = "DB";

// Create a connection
$con = new mysqli($host, $username, $password, $database);

// Check the connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Set the charset to utf8 (optional)
$con->set_charset("utf8");
?>
