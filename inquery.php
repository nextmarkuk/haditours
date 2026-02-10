<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/phpmailer/Exception.php';
require 'vendor/phpmailer/PHPMailer.php';
require 'vendor/phpmailer/SMTP.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captcha Validation
    if (!isset($_SESSION['captcha_answer']) || $_POST['InquiryAnswer'] != $_SESSION['captcha_answer']) {
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            echo json_encode(['status' => 'error', 'message' => 'Invalid captcha answer. Please try again.']);
            exit;
        }
        echo "<script>alert('Invalid captcha answer. Please try again.'); window.history.back();</script>";
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'mismailwatto195@gmail.com';
        $mail->Password   = 'hrslnbbpzeaufpuz';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('mismailwatto195@gmail.com', 'Hajj Umrah Hub Enquiry');
        $mail->addAddress('mismailwatto195@gmail.com');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Enquiry from Hajj Umrah Hub';

        $body = "<h2>New Website Enquiry</h2>";
        if (isset($_POST['n']) && is_array($_POST['n'])) {
            foreach ($_POST['n'] as $key => $value) {
                $body .= "<strong>" . htmlspecialchars($key) . ":</strong> " . htmlspecialchars($value) . "<br>";
            }
        } else {
            foreach ($_POST as $key => $value) {
                if ($key != 'submit' && $key != 'InquiryAnswer') {
                    $body .= "<strong>" . htmlspecialchars($key) . ":</strong> " . htmlspecialchars($value) . "<br>";
                }
            }
        }

        $mail->Body    = $body;
        $mail->AltBody = strip_tags(str_replace('<br>', "\n", $body));

        $mail->send();
        
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            echo json_encode(['status' => 'success', 'message' => 'Message has been sent successfully']);
            exit;
        }
        
        echo "<script>alert('Message has been sent successfully'); window.location.href='index.html';</script>";
    } catch (Exception $e) {
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            echo json_encode(['status' => 'error', 'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
            exit;
        }
        echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}'); window.location.href='index.html';</script>";
    }
} else {
    header("Location: index.html");
    exit;
}
?>
