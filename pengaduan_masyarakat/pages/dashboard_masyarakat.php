<?php
session_start();

if (!isset($_SESSION['nik'])) {
    header('Location: login.php');
    exit;
}

include 'includes/header.php';
include 'db.php';

// Query pengaduan masyarakat
$nik = $_SESSION['nik'];
$query = "SELECT * FROM pengaduan WHERE nik='$nik'";
$result = $conn->query($query);
?>

<h1>Dashboard Masyarakat - Selamat datang, <?php echo $_SESSION['nama']; ?></h1>

<?php if ($result->num_rows > 0): ?>
    <h2>Riwayat Pengaduan Anda:</h2>
    <ul>
        <?php while ($row = $result->fetch_assoc()): ?>
            <li><?php echo $row['isi_laporan']; ?></li>
        <?php endwhile; ?>
    </ul>
<?php else: ?>
    <p>Anda belum membuat pengaduan.</p>
<?php endif; ?>

<a href="actions/auth.php?action=logout">Logout</a>

<?php include 'includes/footer.php'; ?>
