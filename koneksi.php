<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'sewamotor';

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
?>
