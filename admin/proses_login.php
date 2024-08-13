<?php 
session_start();
require "../connection.php";

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $qry_login = mysqli_query($conn, "SELECT * FROM petugas WHERE username = '$username'");
    
    if (mysqli_num_rows($qry_login) > 0) {
        $dt_login = mysqli_fetch_assoc($qry_login);

        // Verifikasi password
        if (password_verify($password, $dt_login["password"])) {
            $_SESSION["id_petugas"] = $dt_login["id_petugas"];
            $_SESSION["nama"] = $dt_login["nama_petugas"];
            $_SESSION["username"] = $dt_login["username"];
            $_SESSION["alamat"] = $dt_login["alamat"];
            $_SESSION["role"] = $dt_login["role"];
            $_SESSION["status_login_admin"] = true;

            // Cek Remember Me
            if (isset($_POST['remember'])) {
                setcookie('username', $username, time() + 86400 * 30, "/"); // 30 hari
            } else {
                // Hapus cookie jika tidak diingat
                if (isset($_COOKIE['username'])) {
                    setcookie('username', '', time() - 3600, "/"); // Hapus cookie
                }
            }

            header("Location: data_penjualan.php");
            exit;
        } else {
            echo "<script>alert('Username atau password tidak benar'); location.href='login.php';</script>";
        }
    } else {
        echo "<script>alert('Username atau password tidak benar'); location.href='login.php';</script>";
    }
}
?>
