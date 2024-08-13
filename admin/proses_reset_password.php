<?php
session_start();
require "../connection.php";

if (isset($_POST['reset_password'])) {
    $token = $_POST['token'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    // Check if new password and confirm password match
    if ($newPassword !== $confirmPassword) {
        echo "<script>alert('Passwords do not match.'); location.href='reset_password.php?token=" . urlencode($token) . "';</script>";
        exit;
    }

    // Hash the new password
    $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);

    // Verify token
    $stmt = $conn->prepare("SELECT email FROM password_resets WHERE token = ? AND DATE_ADD(created_at, INTERVAL 1 HOUR) > NOW()");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row['email'];

        // Update the password in the database
        $stmt = $conn->prepare("UPDATE petugas SET password = ? WHERE email = ?");
        $stmt->bind_param("ss", $hashedPassword, $email);
        $stmt->execute();

        // Remove the used token
        $stmt = $conn->prepare("DELETE FROM password_resets WHERE token = ?");
        $stmt->bind_param("s", $token);
        $stmt->execute();

        echo "<script>alert('Password has been reset successfully.'); location.href='login.php';</script>";
    } else {
        echo "<script>alert('Invalid or expired token.'); location.href='forgot_password.php';</script>";
    }
}
?>
