<?php
// Placeholder email handler
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'admin@example.com';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : 'Contact Form Submission';
    $message = "Name: " . ($_POST['name'] ?? '') . "\nEmail: " . ($_POST['email'] ?? '') . "\nMessage:\n" . ($_POST['message'] ?? '');
    @mail($to, $subject, $message);
    echo json_encode(['status' => 'ok']);
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method Not Allowed']);
}
?>
