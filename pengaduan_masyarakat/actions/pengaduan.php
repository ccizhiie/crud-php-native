<?php
// Include file koneksi ke database
include '../db.php';

// Fungsi untuk menambahkan pengaduan
function tambahPengaduan($tgl_pengaduan, $nik, $isi_laporan) {
    global $conn;
    $status = '0';
    $stmt = $conn->prepare("INSERT INTO pengaduan (tgl_pengaduan, nik, isi_laporan, status) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $tgl_pengaduan, $nik, $isi_laporan, $status);
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

// Fungsi untuk mengambil semua pengaduan
function getSemuaPengaduan() {
    global $conn;
    $sql = "SELECT * FROM pengaduan";
    $result = $conn->query($sql);
    return $result;
}

// Lainnya (seperti fungsi untuk mengedit dan menghapus pengaduan)

?>
