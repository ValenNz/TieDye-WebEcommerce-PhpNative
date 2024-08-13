<?php
session_start();
require "../connection.php";

if (!isset($_SESSION['status_login_admin']) && isset($_COOKIE['id_petugas']) && isset($_COOKIE['key'])) {
    $id_petugas = $_COOKIE['id_petugas'];
    $key = $_COOKIE['key'];

    $stmt = $conn->prepare("SELECT username FROM petugas WHERE id_petugas = ?");
    $stmt->bind_param("i", $id_petugas);
    $stmt->execute();
    $result = $stmt->get_result();
    $dt_login = $result->fetch_assoc();

    if ($key === hash('sha256', $dt_login['username'])) {
        $_SESSION['status_login_admin'] = true;
        $_SESSION['id_petugas'] = $id_petugas;
    }

    $stmt->close();
}

// Periksa apakah pengguna sudah login
if (!isset($_SESSION["status_login_admin"]) || $_SESSION["status_login_admin"] !== true) {
    // Redirect ke halaman login jika tidak login
    header("Location: login.php");
    exit;
}
?>
