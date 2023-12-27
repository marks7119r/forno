<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Retrieve form data
        $name = $_POST['name'];
        $phoneNumber = $_POST['phoneNumber'];

        // Perform validation (you can add more validation as needed)
        if (empty($name) || empty($phoneNumber) || strlen($phoneNumber) !== 11 || !is_numeric($phoneNumber)) {
            throw new Exception('Invalid form data.');
        }

        // Process the form data (replace this with your specific logic)
        // For demonstration purposes, just echoing the data
        echo json_encode(array('status' => 'success', 'message' => 'Form submitted successfully.'));
        exit();
    } catch (Exception $e) {
        echo json_encode(array('status' => 'error', 'message' => $e->getMessage()));
        exit();
    }
} else {
    echo json_encode(array('status' => 'error', 'message' => 'Invalid request method.'));
    exit();
}
?>
