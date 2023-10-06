<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: ../login.php");
}

// Ambil data aduan dari database
require_once('../includes/db.php');
$nik = $_SESSION['nik'];
$sql = "SELECT * FROM tb_pengaduan WHERE nik = '$nik'";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Aduan - Aplikasi Pengaduan Masyarakat</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="daftar-aduan-container">
        <h2>Daftar Aduan Anda</h2>
        <table>
            <tr>
                <th>Tanggal Aduan</th>
                <th>Isi Aduan</th>
                <!-- Anda juga dapat menambahkan kolom lain seperti status -->
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["tgl_adu"] . "</td>";
                    echo "<td>" . $row["isi_aduan"] . "</td>";
                    // Anda dapat menambahkan kolom lain sesuai kebutuhan
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'>Belum ada aduan.</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
