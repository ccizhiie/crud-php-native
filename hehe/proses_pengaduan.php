<?php
session_start();
if (!isset($_SESSION['nik'])) {
    header('location: login.php');
}
include('koneksi.php');

if (isset($_POST['isi_laporan'])) {
    $nik = $_SESSION['nik'];
    $isi_laporan = $_POST['isi_laporan'];
    $tgl_pengaduan = date("Y-m-d");

    $query = "INSERT INTO pengaduan (nik, tgl_pengaduan, isi_laporan, status) VALUES ('$nik', '$tgl_pengaduan', '$isi_laporan', '0')";

    if ($conn->query($query) === TRUE) {
        header('location: pengaduan.php?sukses=true');
    } else {
        header('location: pengaduan.php?gagal=true');
    }
} else {
    header('location: pengaduan.php');
}
?>
