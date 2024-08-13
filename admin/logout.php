<?php 
// Jalankan Session
session_start();

// Kosongkan semua data sesi
$_SESSION = [];

// Hapus variabel sesi
session_unset();

// Hentikan sesi
session_destroy();

// Hapus cookies dengan nama yang sama dan waktu kedaluwarsa yang telah berlalu
if (isset($_COOKIE['id'])) {
    setcookie('id', '', time() - 3600, "/"); // Set path sesuai dengan path cookie
}

if (isset($_COOKIE['key'])) {
    setcookie('key', '', time() - 3600, "/"); // Set path sesuai dengan path cookie
}

// Lempar user ke halaman login jika user logout
header("Location: login.php");
exit;
?>
