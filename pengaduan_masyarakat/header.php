<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Masyarakat</title>
    <!-- Tambahkan tautan ke file CSS Anda di sini -->
</head>
<body>
    <header>
        <h1>Pengaduan Masyarakat</h1>
        <nav>
            <ul>
                <?php if(isset($_SESSION['nik']) || isset($_SESSION['id_petugas'])) { ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php } else { ?>
                    <li><a href="login.php">Login</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <main>
