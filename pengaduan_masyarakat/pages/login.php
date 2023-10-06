<?php include 'includes/header.php'; ?>

<h1>Login</h1>

<?php
if (isset($_GET['error']) && $_GET['error'] == 1) {
    echo '<p class="error">Username atau password salah.</p>';
}
?>

<form action="actions/auth.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <input type="submit" value="Login">
</form>

<?php include 'includes/footer.php'; ?>
