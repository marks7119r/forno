<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Retrieve form data
        $name = $_POST['name'];
        $phoneNumber = $_POST['phoneNumber'];

        // Perform validation (you can add more validation as needed)
        if (empty($name) && empty($phoneNumber)) {
            throw new Exception('Please provide a name and a 11-digit numeric phone number.');
        }

        if (empty($name)) {
            throw new Exception('Please provide a valid name.');
        }

        // Check for HTML tags in the name
        if (strip_tags($name) !== $name) {
            throw new Exception('HTML tags are not allowed in the name.');
        }

        if (empty($phoneNumber) || strlen($phoneNumber) !== 11 || !is_numeric($phoneNumber)) {
            throw new Exception('Please provide a 11-digit numeric phone number.');
        }

        // Escape user input before using it in HTML
        $escapedName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $escapedPhoneNumber = htmlspecialchars($phoneNumber, ENT_QUOTES, 'UTF-8');

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
