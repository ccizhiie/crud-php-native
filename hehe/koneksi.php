<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_pengaduan2";

$conn = new mysqli("localhost", "root", "", "db_pengaduan2");

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>
