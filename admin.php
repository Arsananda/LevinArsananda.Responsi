<?php
session_start();

// Fungsi login sederhana (ganti dengan sistem autentikasi yang lebih aman untuk penggunaan nyata)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "dr.amira" && $password === "password123") {
        $_SESSION["logged_in"] = true;
    } else {
        $error = "Username atau password salah!";
    }
}

// Cek apakah user sudah login
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    ?>
    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Login - MindWell Clinic</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h2>Admin Login</h2>
        <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
        <form method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </body>
    </html>
    <?php
    exit();
}

// Jika user sudah login, tampilkan daftar janji temu
$appointments = file("appointments.txt", FILE_IGNORE_NEW_LINES);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - MindWell Clinic</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Daftar Janji Temu</h2>
    <ul>
        <?php
        foreach ($appointments as $appointment) {
            echo "<li>$appointment</li>";
        }
        ?>
    </ul>
    <a href="index.html">Kembali ke Beranda</a>
</body>
</html>