<?php
session_start();
include('koneksi.php');

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM masyarakat WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $_SESSION['nik'] = $data['nik'];
        header('location: pengaduan.php');
    } else {
        header('location: login.php?login_gagal=true');
    }
} else {
    header('location: login.php');
}
?>
