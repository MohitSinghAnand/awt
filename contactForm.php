<?php
// Load PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if (isset($_POST["submit-form"])) {
    // Read the form values
    echo "received form data";
    $success = false;
    $userName = isset($_POST['name']) ? preg_replace("/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['name']) : "";
    $senderCity = isset($_POST['city']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['city']) : "";
    $senderEmail = isset($_POST['email']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email']) : "";
    $senderPhone = isset($_POST['phone']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['phone']) : "";
    $senderWhatsapp = isset($_POST['whatsapp']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['whatsapp']) : "";
    $senderTravel = isset($_POST['travel']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['travel']) : "";
    $senderDate = isset($_POST['date']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['date']) : "";
    $senderPeople = isset($_POST['people']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['people']) : "";
    $senderVacation = isset($_POST['vacation']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['vacation']) : "";

    // Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = 0;                                   // Disable debug output for production
        $mail->isSMTP();                                         // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                // Enable SMTP authentication
        $mail->Username   = 'sales.atwtravelss@gmail.com';           // SMTP username
        $mail->Password   = 'pnjk ltxa zglz bwwm';               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable implicit TLS encryption
        $mail->Port       = 465;                                 // TCP port to connect to

        // Recipients
        $mail->setFrom('sales.atwtravelss@gmail.com', 'ATW Travels');
        $mail->addAddress('sales.atwtravelss@gmail.com', 'ATW Travels'); // Add a recipient
        $mail->addReplyTo($senderEmail, $userName); // Set reply-to as user's email

        // Content
        $mail->isHTML(true);                                     // Set email format to HTML
        $mail->Subject = 'ATW Travels Enquiry Forms';
        $mail->Body    = " 
            <p><span>Name:</span> " . htmlspecialchars($userName) . "</p>
            <p><span>City:</span> " . htmlspecialchars($senderCity) . "</p>
            <p><span>Email:</span> " . htmlspecialchars($senderEmail) . "</p>
            <p><span>Phone:</span> " . htmlspecialchars($senderPhone) . "</p>
            <p><span>WhatsApp:</span> " . htmlspecialchars($senderWhatsapp) . "</p>
            <p><span>Travel:</span> " . htmlspecialchars($senderTravel) . "</p>
            <p><span>Date of Travel:</span> " . htmlspecialchars($senderDate) . "</p>
            <p><span>No. of People:</span> " . htmlspecialchars($senderPeople) . "</p>
            <p><span>Vacation Type:</span> " . htmlspecialchars($senderVacation) . "</p>
        ";

        // Send email
        $mail->send();
        echo "Email Sending Finished";
        header('Location: thankyou.html'); // Redirect to thank you page after successful submission
        exit(); // Ensure no further code is executed after redirection
        
    } catch (Exception $e) {
        echo "Error Sending Email: {$mail->ErrorInfo}";
        header('Location: error.html'); // Redirect to error page if email fails
        exit(); // Ensure no further code is executed after redirection
    }
}

?>
