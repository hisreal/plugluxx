<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

header('Content-Type: application/json');

// Only process POST requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get form values and sanitize
    $name        = trim($_POST['name'] ?? '');
    $phone            = trim($_POST['phone'] ?? '');
    $email            = trim($_POST['email'] ?? '');
    $subject= trim($_POST['subject'] 'email');
    $message          = trim($_POST['message'] ?? '');

    // Validate required fields
    if (!$name || !$phone || !$email || !$subject || !$message) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill in all required fields.']);
        exit;
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email address.']);
        exit;
    }

    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "mail.theplugluxx.com";       
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl';
        $mail->Username = "info@theplugluxx.com";
        $mail->Password = "Lifestyle26%";

        // IMPORTANT: setFrom should be your domain email (not user's email)
        $mail->setFrom("info@theplugluxx.com", "Website Contact Form");
        $mail->addAddress("info@theplugluxx.com");
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = "Contact Details From $name";

        $mail->Body = "
            <h3>New Quote Request</h3>
            <p><strong>Full Name:</strong> {$name}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Product:</strong> {$subject}</p>
            <p><strong>Quantity:</strong> {$message}</p>
        ";

        $mail->AltBody = "
            New Quote Request
            
            Full Name: {$name}
            Phone: {$phone}
            Email: {$email}
            Subject: {$subject}
            Message: {$message}
        ";

        $mail->send();

        echo json_encode(['status' => 'success', 'message' => 'Your quote request has been sent successfully!']);

    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'Mailer Error: ' . $mail->ErrorInfo]);
    }

} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
}
?>