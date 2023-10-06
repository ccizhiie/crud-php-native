<?php
session_start();
if (!isset($_SESSION['nik'])) {
    header('location: login.php');
}
include('koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pengaduan - Aplikasi Pengaduan Masyarakat</title>
</head>
<body>
    <h1>Form Pengaduan</h1>
    <form action="proses_pengaduan.php" method="POST">
        <textarea name="isi_laporan" rows="5" cols="40" required></textarea><br>
        <button type="submit">Kirim</button>
    </form>
    <a href="logout.php">Logout</a>
</body>
</html>
