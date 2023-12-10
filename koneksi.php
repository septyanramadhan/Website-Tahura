<?php
// Konfigurasi koneksi database
$host = 'localhost';
$dbname = 'taharu';
$username = 'root';
$password = '';

// Membuat koneksi ke database menggunakan PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set mode error untuk PDO untuk melihat pesan error jika terjadi kesalahan
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

?>
