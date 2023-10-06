<?php
session_start();
include 'includes/header.php';

if(isset($_SESSION['nik'])) {
    include 'dashboard_masyarakat.php';
} elseif(isset($_SESSION['id_petugas'])) {
    include 'dashboard_petugas.php';
} else {
    include 'login.php';
}

include 'includes/footer.php';
?>
