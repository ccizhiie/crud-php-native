<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Aplikasi Pengaduan Masyarakat</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="dashboard-container">
        <h2>Selamat Datang, <?php echo $_SESSION['username']; ?></h2>
        <a href="pages/create.php">Buat Pengaduan Baru</a>
        <a href="pages/read.php">Lihat Pengaduan</a>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
