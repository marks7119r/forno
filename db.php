<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$dsn= "mysql:host=localhost;dbname=FornoDB";
$username="mark";
$password = "mark";


try {
    $db =new PDO($dsn, $username,$password);
    echo "connected";
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    exit();
    //throw $th;
}
?>