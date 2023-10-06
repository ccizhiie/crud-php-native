<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: ../login.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses pengiriman aduan ke database
    require_once('../includes/db.php');

    $nik = $_SESSION['nik'];
    $tgl_adu = date("Y-m-d");
    $isi_aduan = $_POST['isi_aduan'];

    // Anda juga dapat mengunggah gambar jika diperlukan

    $sql = "INSERT INTO tb_pengaduan (nik, tgl_adu, isi_aduan) VALUES ('$nik', '$tgl_adu', '$isi_aduan')";
    if ($conn->query($sql) === TRUE) {
        echo "Aduan berhasil dikirim.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Membuat Aduan Baru - Aplikasi Pengaduan Masyarakat</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="aduan-container">
        <h2>Membuat Aduan Baru</h2>
        <form action="" method="POST">
            <label>Isi Aduan</label>
            <textarea name="isi_aduan" required></textarea>
            <!-- Tambahkan fitur unggah gambar jika diperlukan -->
            <button type="submit">Kirim Aduan</button>
        </form>
    </div>
</body>
</html>
