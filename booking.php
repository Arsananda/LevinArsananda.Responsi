<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    $appointment = "Nama: $name, Email: $email, Tanggal: $date, Waktu: $time\n";
    
    $file = fopen("appointments.txt", "a");
    fwrite($file, $appointment);
    fclose($file);

    echo "<h2>Janji temu berhasil dibuat!</h2>";
    echo "<p>Terima kasih, $name. Janji temu Anda telah dijadwalkan pada $date pukul $time.</p>";
    echo "<a href='index.html'>Kembali ke Beranda</a>";
} else {
    header("Location: index.html");
    exit();
}
?>