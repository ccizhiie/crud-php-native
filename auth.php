<?php
session_start();

include '../db.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Anda harus mengganti ini dengan cara hash yang aman

    $query = "SELECT * FROM masyarakat WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['nik'] = $row['nik'];
        $_SESSION['nama'] = $row['nama'];
        header('Location: ../dashboard_masyarakat.php');
    } else {
        // Gagal login, arahkan kembali ke halaman login
        header('Location: ../login.php?error=1');
    }
} else {
    // Redirect ke halaman login jika data tidak lengkap
    header('Location: ../login.php');
}

// Logout
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_destroy();
    header('Location: ../login.php');
}
?>
