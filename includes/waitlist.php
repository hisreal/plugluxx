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
    $name           = trim($_POST['name'] ?? '');
    $phone            = trim($_POST['phone'] ?? '');
    $email            = trim($_POST['email'] ?? '');
    $location          = trim($_POST['location'] ?? '');
    $interest          = trim($_POST['interest'] ?? '');

    // Validate required fields
    if (!$name || !$phone || !$email || !$location|| !$interest) {
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
        $mail->Username = "waitlist@theplugluxx.com";
        $mail->Password = "Lifestyle26%";

        // IMPORTANT: setFrom should be your domain email (not user's email)
        $mail->setFrom("waitlist@theplugluxx.com", "Waitlist Form");
        $mail->addAddress("waitlist@theplugluxx.com");
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = "App WaitList From $name";

        $mail->Body = "
            <h3>Waitlist Request</h3>
            <p><strong>Full Name:</strong> {$name}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Location:</strong> {$location}</p>
            <p><strong>Interest:</strong> {$interest}</p>
        ";

        $mail->AltBody = "
            New Waitlist Request
            
            Full Name: {$name}
            Phone: {$phone}
            Email: {$email}
            Location: {$location}
            Interest: {$interest}
        ";

        $mail->send();

            echo json_encode([
            'status' => 'success',
            'message' => "You have been successfully added to the waitlist.<br><br>
            <strong>What next:</strong><br>
            1. Get a confirmation email<br>
            2. Receive launch updates<br>
            3. Be notified for early access"
            ]);

    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'Mailer Error: ' . $mail->ErrorInfo]);
    }

} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
}
?>