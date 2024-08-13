<?php
session_start();
require "../connection.php";
require '../vendor/autoload.php'; // Adjust the path as needed

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    
    // Check if the email exists
    $stmt = $conn->prepare("SELECT id_petugas, username FROM petugas WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $token = bin2hex(random_bytes(50)); // Generate a secure token

        // Store the token in the database
        $stmt = $conn->prepare("INSERT INTO password_resets (email, token) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $token);
        $stmt->execute();

        // Send the reset email
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io'; // Mailtrap SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'd03c78e9c83025'; // Mailtrap SMTP username
            $mail->Password = '35bf9ec83eaf43'; // Mailtrap SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            //Recipients
            $mail->setFrom('no-reply@yourwebsite.com', 'Your Website');
            $mail->addAddress($email);

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Password Reset Request';
            $mail->Body = "To reset your password, click the link below:<br><br>" .
            "<a href='http://localhost:81/TieDye-WebOnlineShoop/admin/reset_password.php?token=$token'>Reset Password</a>";

            $mail->send();
            echo "<script>alert('Password reset link has been sent to your email.'); location.href='login.php';</script>";
        } catch (Exception $e) {
            echo "<script>alert('Mailer Error: " . htmlspecialchars($e->getMessage()) . "'); location.href='forgot_password.php';</script>";
        }
    } else {
        echo "<script>alert('Email not found.'); location.href='forgot_password.php';</script>";
    }
}
?>
