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
    $name           = "The PlugLuxx";
    $email            = trim($_POST['email'] ?? '');


    // Validate required fields
    if ( !$email ) {
        echo json_encode(['status' => 'error', 'message' => 'Please Enter Your Email']);
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
        $mail->setFrom("info@theplugluxx.com", "Subscribers Form");
        $mail->addAddress("info@theplugluxx.com");
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = "New Subscriber from $name";

        $mail->Body = "
            <h3>Subscribers Request</h3>
            <p><strong>Full Name:</strong> {$name}</p>
           
            <p><strong>Email:</strong> {$email}</p>
           
        ";

        $mail->AltBody = "
            New Subscribers Request
            
            Email: {$email}
            Name: {$name}
        ";

        $mail->send();

            echo json_encode([
            'status' => 'success',
            'message' => "Successfully subscribed"
            ]);

    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'Mailer Error: ' . $mail->ErrorInfo]);
    }

} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
}
?>